import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useThemeStore = defineStore('theme', () => {
  const theme = ref(localStorage.getItem('theme') || 'dark');

  const initTheme = () => {
    if (theme.value === 'dark') {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  };

  const toggleTheme = () => {
    if (theme.value === 'dark') {
      theme.value = 'light';
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    } else {
      theme.value = 'dark';
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    }
  };

  return {
    theme,
    initTheme,
    toggleTheme
  };
});
