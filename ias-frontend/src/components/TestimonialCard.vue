<template>
  <div class="bg-white rounded-lg shadow-md p-6">
    <!-- Star Rating -->
    <div class="flex gap-1 mb-3">
      <span v-for="i in 5" :key="i" class="text-2xl">
        {{ i <= testimonial.rating ? '⭐' : '☆' }}
      </span>
    </div>

    <!-- Review Text -->
    <p class="text-gray-700 text-sm mb-4">
      "{{ testimonial.review_text }}"
    </p>

    <!-- Student Info -->
    <div class="flex items-center gap-3">
      <img 
        v-if="testimonial.image_url" 
        :src="testimonial.image_url" 
        :alt="testimonial.student_name"
        class="w-10 h-10 rounded-full object-cover"
      >
      <div v-else class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white text-sm font-bold">
        {{ testimonial.student_name.charAt(0) }}
      </div>
      <div>
        <p class="font-semibold text-gray-800">{{ testimonial.student_name }}</p>
        <p class="text-sm text-gray-600">{{ testimonial.course?.name }}</p>
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps({
  testimonial: {
    type: Object,
    required: true
  }
});
</script>

<style scoped>
.bg-primary {
  background-color: var(--primary, #3B82F6);
}
</style>
