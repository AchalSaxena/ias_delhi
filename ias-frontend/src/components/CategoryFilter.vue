<template>
  <div class="bg-white rounded-lg shadow-md p-6">
    <h3 class="text-lg font-bold text-gray-800 mb-4">Filter by Category</h3>
    
    <div class="space-y-3">
      <label class="flex items-center gap-3 cursor-pointer">
        <input 
          type="checkbox"
          :checked="filterStore.selectedCategory === ''"
          @change="filterStore.setCategory('')"
          class="w-4 h-4 text-primary rounded cursor-pointer"
        >
        <span class="text-gray-700">All Categories</span>
      </label>

      <label 
        v-for="category in categories" 
        :key="category"
        class="flex items-center gap-3 cursor-pointer"
      >
        <input 
          type="checkbox"
          :checked="filterStore.selectedCategory === category"
          @change="filterStore.setCategory(category)"
          class="w-4 h-4 text-primary rounded cursor-pointer"
        >
        <span class="text-gray-700">{{ category }}</span>
      </label>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue';
import { useFilterStore } from '../stores/filterStore';
import { useCourseStore } from '../stores/courseStore';

const filterStore = useFilterStore();
const courseStore = useCourseStore();

const categories = computed(() => courseStore.categories);
</script>

<style scoped>
.text-primary {
  color: var(--primary, #3B82F6);
}

input[type="checkbox"]:checked {
  accent-color: var(--primary, #3B82F6);
}
</style>
