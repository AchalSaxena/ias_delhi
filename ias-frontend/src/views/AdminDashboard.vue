<template>
  <main class="min-h-screen bg-gray-100">
    <div class="container mx-auto px-4 py-12">
      <header class="mb-12 flex items-center justify-between">
        <div><h1 class="mb-2 text-4xl font-bold">Admin Dashboard</h1><p class="text-gray-600">Manage inquiries and testimonials</p></div>
        <button @click="logout" class="text-sm font-semibold text-blue-600 hover:text-blue-800">Logout</button>
      </header>

      <div class="mb-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
        <article v-for="item in statCards" :key="item.label" class="rounded-lg border-l-4 bg-white p-6 shadow-md" :class="item.border">
          <h2 class="mb-2 text-lg font-semibold text-gray-700">{{ item.label }}</h2><p class="text-3xl font-bold" :class="item.color">{{ item.value }}</p>
          <p v-if="item.detail" class="mt-1 text-sm text-gray-500">{{ item.detail }}</p>
        </article>
      </div>

      <p v-if="error" class="mb-6 rounded bg-red-100 p-3 text-red-700">{{ error }}</p>
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
        <section class="rounded-lg bg-white shadow-md"><header class="border-b p-6"><h2 class="text-xl font-bold">Recent Inquiries</h2></header>
          <div class="p-6"><p v-if="loading" class="py-8 text-center">Loading…</p><p v-else-if="!recentActivity.recentInquiries.length" class="py-8 text-center text-gray-500">No inquiries yet</p>
            <div v-else class="space-y-4"><article v-for="inquiry in recentActivity.recentInquiries" :key="inquiry.id" class="flex items-start justify-between rounded-lg bg-gray-50 p-4"><div><h3 class="font-semibold">{{ inquiry.name }}</h3><p class="text-sm text-gray-600">{{ inquiry.email }}</p><p class="text-sm text-gray-500">Course: {{ inquiry.course?.name || 'General' }}</p></div><div class="flex flex-col items-end gap-2"><span :class="badgeClass(inquiry.status)">{{ inquiry.status }}</span><button @click="removeInquiry(inquiry.id)" class="text-sm font-medium text-red-600">Delete</button></div></article></div>
          </div>
        </section>
        <section class="rounded-lg bg-white shadow-md"><header class="border-b p-6"><h2 class="text-xl font-bold">Pending Testimonials</h2></header>
          <div class="p-6"><p v-if="loading" class="py-8 text-center">Loading…</p><p v-else-if="!pendingTestimonials.length" class="py-8 text-center text-gray-500">No pending testimonials</p>
            <div v-else class="space-y-4"><article v-for="testimonial in pendingTestimonials" :key="testimonial.id" class="rounded-lg bg-gray-50 p-4"><div class="mb-2 flex items-start justify-between"><h3 class="font-semibold">{{ testimonial.student_name }}</h3><div class="flex gap-2"><button @click="approve(testimonial.id)" class="rounded bg-green-100 px-3 py-1 text-sm text-green-700">Approve</button><button @click="removeTestimonial(testimonial.id)" class="rounded bg-red-100 px-3 py-1 text-sm text-red-700">Delete</button></div></div><p class="mb-2 text-sm text-gray-600">{{ testimonial.review_text }}</p><p class="text-sm text-gray-500">Course: {{ testimonial.course?.name || 'Not specified' }} · {{ '★'.repeat(testimonial.rating) }}{{ '☆'.repeat(5 - testimonial.rating) }}</p></article></div>
          </div>
        </section>
      </div>
    </div>
  </main>
</template>

<script setup>
import { computed, onMounted, ref } from 'vue';
import { useRouter } from 'vue-router';
import { useAuthStore } from '../stores/authStore';
import { useAdminStore } from '../stores/adminStore';

const router = useRouter();
const authStore = useAuthStore();
const adminStore = useAdminStore();
const loading = ref(false);
const error = ref('');
const stats = ref({ courses: 0, inquiries: 0, testimonials: 0, subscribers: 0, pendingTestimonials: 0 });
const recentActivity = ref({ recentInquiries: [], recentTestimonials: [] });
const pendingTestimonials = computed(() => recentActivity.value.recentTestimonials.filter(item => !item.approved));
const statCards = computed(() => [
  { label: 'Total Courses', value: stats.value.courses, border: 'border-blue-500', color: 'text-blue-600' },
  { label: 'New Inquiries', value: stats.value.inquiries, border: 'border-green-500', color: 'text-green-600' },
  { label: 'Testimonials', value: stats.value.testimonials, detail: `(${stats.value.pendingTestimonials} pending)`, border: 'border-purple-500', color: 'text-purple-600' },
  { label: 'Newsletter Subscribers', value: stats.value.subscribers, border: 'border-orange-500', color: 'text-orange-600' },
]);
const badgeClass = status => `rounded-full px-2 py-1 text-xs font-medium ${({ new: 'bg-yellow-100 text-yellow-800', contacted: 'bg-blue-100 text-blue-800', enrolled: 'bg-green-100 text-green-800' })[status] || 'bg-gray-100 text-gray-800'}`;
const loadDashboard = async () => { loading.value = true; error.value = ''; try { await adminStore.fetchDashboardStats(); stats.value = { ...adminStore.stats }; recentActivity.value = { ...adminStore.recentActivity }; } catch { error.value = 'Unable to load dashboard data.'; } finally { loading.value = false; } };
const removeInquiry = async id => { await adminStore.deleteInquiry(id); await loadDashboard(); };
const approve = async id => { await adminStore.approveTestimonial(id); await loadDashboard(); };
const removeTestimonial = async id => { await adminStore.deleteTestimonial(id); await loadDashboard(); };
const logout = () => { authStore.logout(); router.push({ name: 'AdminLogin' }); };
onMounted(() => { if (!authStore.token) router.push({ name: 'AdminLogin' }); else loadDashboard(); });
</script>
