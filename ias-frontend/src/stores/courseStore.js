import { defineStore } from 'pinia';
import { ref, computed } from 'vue';
import axios from 'axios';

export const useCourseStore = defineStore('course', () => {
  const courses = ref([]);
  const selectedCourse = ref(null);
  const loading = ref(false);
  const error = ref(null);

  const categories = computed(() => {
    return [...new Set(courses.value.map(c => c.category))];
  });

  const fetchCourses = async (filters = {}) => {
    loading.value = true;
    error.value = null;
    try {
      const params = new URLSearchParams();
      if (filters.category) params.append('category', filters.category);
      if (filters.search) params.append('search', filters.search);

      const response = await axios.get(`/api/courses?${params}`);
      courses.value = response.data.data;
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to load courses';
    } finally {
      loading.value = false;
    }
  };

  const fetchCourseById = async (id) => {
    loading.value = true;
    error.value = null;
    try {
      const response = await axios.get(`/api/courses/${id}`);
      selectedCourse.value = response.data.data;
      return response.data.data;
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to load course';
    } finally {
      loading.value = false;
    }
  };

  const createCourse = async (courseData) => {
    try {
      const response = await axios.post('/api/courses', courseData);
      courses.value.push(response.data.data);
      return response.data.data;
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  const updateCourse = async (id, courseData) => {
    try {
      const response = await axios.put(`/api/courses/${id}`, courseData);
      const index = courses.value.findIndex(c => c.id === id);
      if (index !== -1) {
        courses.value[index] = response.data.data;
      }
      return response.data.data;
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  const deleteCourse = async (id) => {
    try {
      await axios.delete(`/api/courses/${id}`);
      courses.value = courses.value.filter(c => c.id !== id);
    } catch (err) {
      throw err.response?.data || err;
    }
  };

  return {
    courses,
    selectedCourse,
    loading,
    error,
    categories,
    fetchCourses,
    fetchCourseById,
    createCourse,
    updateCourse,
    deleteCourse
  };
});
