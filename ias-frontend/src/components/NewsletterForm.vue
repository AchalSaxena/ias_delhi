<template>
  <form @submit.prevent="subscribe" class="space-y-2">
    <div class="flex gap-2">
      <input 
        v-model="email"
        type="email" 
        placeholder="Your email"
        class="flex-1 px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:border-primary"
        required
      >
      <button 
        type="submit"
        :disabled="loading"
        class="bg-primary text-white px-4 py-2 rounded text-sm hover:bg-primary-dark transition disabled:opacity-50"
      >
        {{ loading ? '...' : 'Subscribe' }}
      </button>
    </div>
    <div v-if="message" :class="['text-sm', messageType === 'success' ? 'text-green-600' : 'text-red-600']">
      {{ message }}
    </div>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const email = ref('');
const loading = ref(false);
const message = ref('');
const messageType = ref('');

const subscribe = async () => {
  if (!email.value) return;
  
  loading.value = true;
  message.value = '';
  
  try {
    await axios.post('/api/newsletter/subscribe', { email: email.value });
    message.value = 'Thank you for subscribing!';
    messageType.value = 'success';
    email.value = '';
    setTimeout(() => message.value = '', 3000);
  } catch (err) {
    message.value = err.response?.data?.message || 'Failed to subscribe';
    messageType.value = 'error';
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
