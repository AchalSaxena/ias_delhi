<template>
  <div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
      <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-primary mb-2">Admin Login</h1>
        <p class="text-gray-600">Sign in to access the admin dashboard</p>
      </div>

      <form @submit.prevent="login" class="space-y-6">
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
          <input
            id="email"
            v-model="form.email"
            type="email"
            required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
            placeholder="admin@example.com"
          />
          <span v-if="errors.email" class="text-red-500 text-sm">{{ errors.email[0] }}</span>
        </div>

        <div>
          <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
          <input
            id="password"
            v-model="form.password"
            type="password"
            required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
            placeholder="••••••••"
          />
          <span v-if="errors.password" class="text-red-500 text-sm">{{ errors.password[0] }}</span>
        </div>

        <div v-if="errorMessage" class="bg-red-100 text-red-700 p-3 rounded-lg">
          {{ errorMessage }}
        </div>

        <button
          type="submit"
          :disabled="loading"
          class="w-full bg-primary text-white font-semibold py-3 rounded-lg hover:bg-primary-dark transition disabled:opacity-50"
        >
          {{ loading ? 'Signing in...' : 'Sign In' }}
        </button>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { useAuthStore } from '../stores/authStore';
import { useRouter } from 'vue-router';

const authStore = useAuthStore();
const router = useRouter();

const form = ref({
  email: '',
  password: ''
});

const loading = ref(false);
const errors = ref({});
const errorMessage = ref('');

const login = async () => {
  loading.value = true;
  errors.value = {};
  errorMessage.value = '';

  try {
    await authStore.login(form.value);
    router.push({ name: 'AdminDashboard' });
  } catch (err) {
    errorMessage.value = err.response?.data?.message || 'Login failed. Please try again.';
    if (err.response?.data?.errors) {
      errors.value = err.response.data.errors;
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
