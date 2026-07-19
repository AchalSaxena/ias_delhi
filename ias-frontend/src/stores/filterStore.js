import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useFilterStore = defineStore('filter', () => {
  const selectedCategory = ref('');
  const searchQuery = ref('');

  const setCategory = (category) => {
    selectedCategory.value = category;
  };

  const setSearchQuery = (query) => {
    searchQuery.value = query;
  };

  const clearFilters = () => {
    selectedCategory.value = '';
    searchQuery.value = '';
  };

  return {
    selectedCategory,
    searchQuery,
    setCategory,
    setSearchQuery,
    clearFilters
  };
});
