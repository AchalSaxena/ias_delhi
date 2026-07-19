<template>
  <form @submit.prevent="submitForm" class="space-y-4">
    <!-- Name -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Name</label>
      <input 
        v-model="formData.name"
        type="text" 
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
        placeholder="Your full name"
      >
      <span v-if="errors.name" class="text-red-500 text-sm">{{ errors.name[0] }}</span>
    </div>

    <!-- Email -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
      <input 
        v-model="formData.email"
        type="email" 
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
        placeholder="your.email@example.com"
      >
      <span v-if="errors.email" class="text-red-500 text-sm">{{ errors.email[0] }}</span>
    </div>

    <!-- Phone -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Phone</label>
      <input 
        v-model="formData.phone"
        type="tel" 
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
        placeholder="+91 98765 43210"
      >
      <span v-if="errors.phone" class="text-red-500 text-sm">{{ errors.phone[0] }}</span>
    </div>

    <!-- Course Dropdown -->
    <div v-if="!courseId">
      <label class="block text-sm font-semibold text-gray-700 mb-1">Course (Optional)</label>
      <select 
        v-model="formData.course_id"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
      >
        <option value="">Select a course...</option>
        <option v-for="course in courses" :key="course.id" :value="course.id">
          {{ course.name }}
        </option>
      </select>
    </div>

    <!-- Message -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
      <textarea 
        v-model="formData.message"
        required
        rows="5"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
        placeholder="Tell us about your inquiry..."
      ></textarea>
      <span v-if="errors.message" class="text-red-500 text-sm">{{ errors.message[0] }}</span>
    </div>

    <!-- Submit Button -->
    <button 
      type="submit"
      :disabled="loading"
      class="w-full bg-primary text-white font-semibold py-2 rounded-lg hover:bg-primary-dark transition disabled:opacity-50"
    >
      {{ loading ? 'Sending...' : 'Send Inquiry' }}
    </button>

    <!-- Success Message -->
    <div v-if="successMessage" class="bg-green-100 text-green-700 p-3 rounded-lg">
      {{ successMessage }}
    </div>

    <!-- Error Message -->
    <div v-if="errorMessage" class="bg-red-100 text-red-700 p-3 rounded-lg">
      {{ errorMessage }}
    </div>
  </form>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useCourseStore } from '../stores/courseStore';
import axios from 'axios';

const props = defineProps({
  courseId: {
    type: [String, Number],
    default: null
  }
});

const courseStore = useCourseStore();
const formData = ref({
  name: '',
  email: '',
  phone: '',
  course_id: props.courseId || '',
  message: ''
});

const loading = ref(false);
const errors = ref({});
const successMessage = ref('');
const errorMessage = ref('');
const courses = ref([]);

onMounted(() => {
  if (courseStore.courses.length === 0) {
    courseStore.fetchCourses();
  }
  courses.value = courseStore.courses;
});

const submitForm = async () => {
  loading.value = true;
  errors.value = {};
  successMessage.value = '';
  errorMessage.value = '';

  try {
    const data = { ...formData.value };
    if (!data.course_id) delete data.course_id;

    await axios.post('/api/inquiries', data);

    successMessage.value = 'Thank you! Your inquiry has been received. We will contact you soon.';
    formData.value = {
      name: '',
      email: '',
      phone: '',
      course_id: props.courseId || '',
      message: ''
    };

    setTimeout(() => {
      successMessage.value = '';
    }, 5000);
  } catch (err) {
    if (err.response?.data?.errors) {
      errors.value = err.response.data.errors;
    } else {
      errorMessage.value = err.response?.data?.message || 'Failed to send inquiry. Please try again.';
    }
  } finally {
    loading.value = false;
  }
};
</script>

<style scoped>
.text-primary {
  color: var(--primary, #3B82F6);
}

.bg-primary {
  background-color: var(--primary, #3B82F6);
}

.focus\:border-primary:focus {
  border-color: var(--primary, #3B82F6);
}
</style>
