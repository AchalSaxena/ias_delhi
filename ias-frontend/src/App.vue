<template>
  <div class="min-h-screen bg-[#f9fafb] text-gray-900 dark:bg-neutral-950 dark:text-gray-150 transition-colors duration-300">
    <Header v-if="!isAdminRoute" />
    <router-view />
    <Footer v-if="!isAdminRoute" />
  </div>
</template>

<script setup>
import { computed, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import { useThemeStore } from './stores/themeStore'

const route = useRoute()
const isAdminRoute = computed(() => route.path.startsWith('/admin'))

const themeStore = useThemeStore()
onMounted(() => {
  themeStore.initTheme()
})
</script>
