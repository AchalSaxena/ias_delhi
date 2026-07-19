import { defineStore } from 'pinia';
import { ref } from 'vue';
import { useApi } from '../composables/useApi';

export const useAdminStore = defineStore('admin', () => {
  const { api } = useApi();
  const stats = ref({
    courses: 0,
    inquiries: 0,
    testimonials: 0,
    subscribers: 0,
    pendingTestimonials: 0
  });
  const loading = ref(false);
  const recentActivity = ref({
    recentInquiries: [],
    recentTestimonials: []
  });

  const fetchDashboardStats = async () => {
    loading.value = true;
    try {
      const [coursesRes, inquiriesRes, testimonialsRes, subscribersRes] = await Promise.all([
        api.get('/courses'),
        api.get('/inquiries'),
        api.get('/testimonials/admin'),
        api.get('/newsletter/subscribers')
      ]);

      stats.value = {
        courses: coursesRes.data.data.length,
        inquiries: inquiriesRes.data.data.length,
        testimonials: testimonialsRes.data.data.length,
        subscribers: subscribersRes.data.data.length,
        pendingTestimonials: testimonialsRes.data.data.filter(t => !t.approved).length
      };

      recentActivity.value = {
        recentInquiries: inquiriesRes.data.data.slice(0, 5),
        recentTestimonials: testimonialsRes.data.data.slice(0, 5)
      };
    } catch (err) {
      console.error('Failed to fetch dashboard stats', err);
    } finally {
      loading.value = false;
    }
  };

  const deleteInquiry = async (id) => {
    try {
      await api.delete(`/inquiries/${id}`);
      stats.value.inquiries = Math.max(0, stats.value.inquiries - 1);
      recentActivity.value.recentInquiries = recentActivity.value.recentInquiries.filter(i => i.id !== id);
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  const approveTestimonial = async (id) => {
    try {
      const response = await api.patch(`/testimonials/${id}`, { approved: true });
      stats.value.pendingTestimonials = Math.max(0, stats.value.pendingTestimonials - 1);
      const index = recentActivity.value.recentTestimonials.findIndex(t => t.id === id);
      if (index !== -1) {
        recentActivity.value.recentTestimonials[index] = response.data.data;
      }
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  const deleteTestimonial = async (id) => {
    try {
      const testimonial = recentActivity.value.recentTestimonials.find(item => item.id === id);
      await api.delete(`/testimonials/${id}`);
      if (testimonial?.approved) {
        stats.value.testimonials = Math.max(0, stats.value.testimonials - 1);
      } else {
        stats.value.pendingTestimonials = Math.max(0, stats.value.pendingTestimonials - 1);
      }
      recentActivity.value.recentTestimonials = recentActivity.value.recentTestimonials.filter(item => item.id !== id);
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  return {
    stats,
    loading,
    recentActivity,
    fetchDashboardStats,
    deleteInquiry,
    approveTestimonial,
    deleteTestimonial
  };
});
