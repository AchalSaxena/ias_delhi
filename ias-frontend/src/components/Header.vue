<template>
  <header class="sticky top-0 z-50 bg-black border-b border-neutral-900 shadow-md">
    <!-- Top bar with real contact info -->
    <div class="bg-neutral-950 text-gray-300 border-b border-neutral-900 py-1.5 hidden md:block">
      <div class="container mx-auto px-4 flex justify-between items-center text-xs">
        <div class="flex items-center gap-6">
          <a href="tel:9555098967" class="flex items-center gap-1.5 hover:text-[#ffd504] transition">
            <span class="text-[#ffd504]">📞</span>
            <span>9555098967 / 7678249423</span>
          </a>
          <a href="mailto:iasdelhi.org@gmail.com" class="flex items-center gap-1.5 hover:text-[#ffd504] transition">
            <span class="text-[#ffd504]">✉️</span>
            <span>iasdelhi.org@gmail.com</span>
          </a>
        </div>
        <div class="flex items-center gap-6">
          <div class="flex items-center gap-1.5 text-gray-400">
            <span class="text-[#ffd504]">📍</span>
            <span>Old Rajinder Nagar, New Delhi – 110060</span>
          </div>
          <!-- Theme Switcher Toggle -->
          <div class="flex items-center gap-2 border-l border-neutral-800 pl-4 py-0.5 select-none">
            <span class="text-[10px]">☀️</span>
            <button 
              @click="themeStore.toggleTheme" 
              class="relative inline-flex h-4.5 w-9 flex-shrink-0 cursor-pointer rounded-full border border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-neutral-800"
              title="Toggle website theme"
            >
              <span 
                class="pointer-events-none inline-block h-3.5 w-3.5 transform rounded-full shadow transition duration-200 ease-in-out"
                :class="themeStore.theme === 'dark' ? 'translate-x-4.5 bg-[#ffd504]' : 'translate-x-0 bg-white'"
              ></span>
            </button>
            <span class="text-[10px]">🌙</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Header -->
    <div class="container mx-auto px-4 py-2.5">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <router-link to="/" class="flex items-center gap-3">
          <img :src="logoImg" alt="IAS Delhi Institute" class="h-12 w-auto object-contain filter invert brightness-200" />
          <div class="flex flex-col leading-tight">
            <span class="text-xl font-black text-white tracking-wide">IAS Delhi Institute</span>
            <span class="text-[10px] text-gray-400 font-bold tracking-wider uppercase">We make your dream a reality</span>
          </div>
        </router-link>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center gap-6 h-12">
          <!-- Home Link -->
          <router-link 
            to="/"
            class="text-gray-300 hover:text-[#ffd504] transition font-bold text-sm flex items-center px-1.5 uppercase tracking-wider h-full border-b-2 border-transparent hover:border-[#ffd504]"
            active-class="text-[#ffd504] border-[#ffd504]"
            exact-active-class="text-[#ffd504] border-[#ffd504]"
          >
            Home
          </router-link>

          <!-- Courses Dropdown -->
          <div 
            class="relative flex items-center h-full"
            @mouseenter="isDropdownOpen = true"
            @mouseleave="isDropdownOpen = false"
          >
            <button 
              @click="handleCoursesNavClick"
              class="text-gray-300 hover:text-[#ffd504] transition font-bold text-sm flex items-center gap-1.5 px-1.5 uppercase tracking-wider h-full border-b-2 border-transparent hover:border-[#ffd504] cursor-pointer"
              :class="isCoursesActive ? 'text-[#ffd504] border-[#ffd504]' : ''"
            >
              Courses
              <span class="text-[8px] transition-transform duration-200" :class="{ 'rotate-180': isDropdownOpen }">▼</span>
            </button>

            <!-- Dropdown Menu -->
            <transition name="slide-down">
              <div 
                v-show="isDropdownOpen"
                class="absolute top-full left-0 mt-0 w-80 bg-neutral-950 border border-neutral-800 shadow-2xl z-50 text-left"
              >
                <div class="flex flex-col">
                  <button
                    v-for="item in coursesDropdown"
                    :key="item.name"
                    @click="handleProgramClick(item)"
                    class="w-full text-left px-4 py-3.5 text-xs font-bold text-gray-200 hover:text-black hover:bg-[#ffd504] transition border-b border-neutral-800 last:border-0 uppercase tracking-wide leading-tight cursor-pointer"
                  >
                    {{ item.name }}
                  </button>
                </div>
              </div>
            </transition>
          </div>

          <!-- Test Series -->
          <button 
            @click="handleQuickFilter('', 'Test Series')"
            class="text-gray-300 hover:text-[#ffd504] transition font-bold text-sm flex items-center px-1.5 uppercase tracking-wider h-full border-b-2 border-transparent hover:border-[#ffd504] cursor-pointer"
            :class="route.path.startsWith('/courses') && filterStore.searchQuery === 'Test Series' ? 'text-[#ffd504] border-[#ffd504]' : ''"
          >
            Test Series
          </button>

          <!-- Study Material -->
          <router-link 
            to="/study-material"
            class="text-gray-300 hover:text-[#ffd504] transition font-bold text-sm flex items-center px-1.5 uppercase tracking-wider h-full border-b-2 border-transparent hover:border-[#ffd504]"
            active-class="text-[#ffd504] border-[#ffd504]"
          >
            Study Material
          </router-link>

          <!-- Current Affairs -->
          <button 
            @click="handleQuickFilter('General Studies', 'Current Affairs')"
            class="text-gray-300 hover:text-[#ffd504] transition font-bold text-sm flex items-center px-1.5 uppercase tracking-wider h-full border-b-2 border-transparent hover:border-[#ffd504] cursor-pointer"
            :class="route.path.startsWith('/courses') && filterStore.searchQuery === 'Current Affairs' ? 'text-[#ffd504] border-[#ffd504]' : ''"
          >
            Current Affairs
          </button>

          <!-- Faculty -->
          <router-link 
            to="/about"
            class="text-gray-300 hover:text-[#ffd504] transition font-bold text-sm flex items-center px-1.5 uppercase tracking-wider h-full border-b-2 border-transparent hover:border-[#ffd504]"
            :class="route.path.startsWith('/about') ? 'text-[#ffd504] border-[#ffd504]' : ''"
          >
            Faculty
          </router-link>
        </nav>

        <!-- Social & Admin -->
        <div class="hidden md:flex items-center gap-4">
          <div class="flex gap-3">
            <a href="https://www.facebook.com/iasdelhi.org" target="_blank" title="Facebook" class="text-gray-400 hover:text-white transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://t.me/iasdelhi" target="_blank" title="Telegram" class="text-gray-400 hover:text-white transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a11.955 11.955 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.042-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.365-1.371.155-.479-.148-1.21-.462-1.805-.668-.725-.24-1.305-.589-1.25-.96.013-.087.147-.176.38-.287 1.468-.697 5.61-2.174 7.322-2.965.652-.419 1.23-.609 1.729-.609z"/></svg>
            </a>
          </div>

          <!-- Admin Portal Link -->
          <router-link
            v-if="!authStore.isAuthenticated"
            to="/admin/login"
            class="bg-[#d97706] hover:bg-[#b45309] text-white px-6 py-2 rounded-full text-xs hover:scale-[1.03] transition font-black tracking-wider uppercase shadow-md cursor-pointer"
          >
            Admin Portal
          </router-link>
          <router-link
            v-else
            to="/admin/dashboard"
            class="bg-[#d97706] hover:bg-[#b45309] text-white px-6 py-2 rounded-full text-xs hover:scale-[1.03] transition font-black tracking-wider uppercase shadow-md cursor-pointer"
          >
            Dashboard
          </router-link>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex items-center md:hidden">
          <button 
            @click="isMobileMenuOpen = !isMobileMenuOpen"
            class="text-white hover:text-[#ffd504] focus:outline-none p-2 cursor-pointer"
            aria-label="Toggle menu"
          >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path v-if="!isMobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <transition name="slide-down">
      <div 
        v-show="isMobileMenuOpen" 
        class="md:hidden bg-neutral-950 border-t border-neutral-900 px-4 py-4 space-y-3 shadow-xl"
      >
        <router-link 
          to="/" 
          @click="isMobileMenuOpen = false"
          class="block text-gray-300 hover:text-[#ffd504] font-semibold text-sm py-1.5 uppercase tracking-wider"
        >
          Home
        </router-link>
        
        <!-- Mobile Courses Accordion -->
        <div>
          <button 
            @click="isMobileCoursesOpen = !isMobileCoursesOpen"
            class="w-full flex justify-between items-center text-gray-300 hover:text-[#ffd504] font-semibold text-sm py-1.5 uppercase tracking-wider text-left cursor-pointer"
          >
            <span>COURSES</span>
            <span class="text-xs transition-transform duration-200" :class="{ 'rotate-180': isMobileCoursesOpen }">▼</span>
          </button>
          <div v-show="isMobileCoursesOpen" class="pl-4 mt-2 space-y-2.5 border-l border-neutral-850">
            <button
              v-for="item in coursesDropdown"
              :key="item.name"
              @click="handleProgramClick(item)"
              class="block w-full text-left text-xs font-bold text-gray-400 hover:text-[#ffd504] py-1 uppercase tracking-wide leading-tight cursor-pointer"
            >
              {{ item.name }}
            </button>
          </div>
        </div>

        <!-- Mobile Test Series -->
        <button 
          @click="handleQuickFilter('', 'Test Series')"
          class="block w-full text-left text-gray-300 hover:text-[#ffd504] font-semibold text-sm py-1.5 uppercase tracking-wider cursor-pointer"
        >
          Test Series
        </button>

        <!-- Mobile Study Material -->
        <router-link 
          to="/study-material"
          @click="isMobileMenuOpen = false"
          class="block text-gray-300 hover:text-[#ffd504] font-semibold text-sm py-1.5 uppercase tracking-wider"
        >
          Study Material
        </router-link>

        <!-- Mobile Current Affairs -->
        <button 
          @click="handleQuickFilter('General Studies', 'Current Affairs')"
          class="block w-full text-left text-gray-300 hover:text-[#ffd504] font-semibold text-sm py-1.5 uppercase tracking-wider cursor-pointer"
        >
          Current Affairs
        </button>

        <!-- Mobile Faculty -->
        <router-link 
          to="/about" 
          @click="isMobileMenuOpen = false"
          class="block text-gray-300 hover:text-[#ffd504] font-semibold text-sm py-1.5 uppercase tracking-wider"
        >
          Faculty
        </router-link>

        <!-- Mobile Theme Switcher -->
        <div class="pt-4 border-t border-neutral-900 flex justify-between items-center mb-4 select-none">
          <span class="text-xs font-black text-gray-400 uppercase tracking-wider">Theme Mode</span>
          <div class="flex items-center gap-2">
            <span class="text-xs">☀️</span>
            <button 
              @click="themeStore.toggleTheme" 
              class="relative inline-flex h-4.5 w-9 flex-shrink-0 cursor-pointer rounded-full border border-transparent transition-colors duration-200 ease-in-out focus:outline-none bg-neutral-800"
            >
              <span 
                class="pointer-events-none inline-block h-3.5 w-3.5 transform rounded-full shadow transition duration-200 ease-in-out"
                :class="themeStore.theme === 'dark' ? 'translate-x-4.5 bg-[#ffd504]' : 'translate-x-0 bg-white'"
              ></span>
            </button>
            <span class="text-xs">🌙</span>
          </div>
        </div>

        <div class="pt-4 border-t border-neutral-900 flex justify-between items-center">
          <div class="flex gap-4">
            <a href="https://www.facebook.com/iasdelhi.org" target="_blank" class="text-gray-400 hover:text-white transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://t.me/iasdelhi" target="_blank" class="text-gray-400 hover:text-white transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a11.955 11.955 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.042-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.365-1.371.155-.479-.148-1.21-.462-1.805-.668-.725-.24-1.305-.589-1.25-.96.013-.087.147-.176.38-.287 1.468-.697 5.61-2.174 7.322-2.965.652-.419 1.23-.609 1.729-.609z"/></svg>
            </a>
          </div>
          
          <router-link
            v-if="!authStore.isAuthenticated"
            to="/admin/login"
            @click="isMobileMenuOpen = false"
            class="bg-[#d97706] hover:bg-[#b45309] text-white px-4 py-1.5 rounded-full text-xs transition font-bold text-center cursor-pointer"
          >
            Admin Portal
          </router-link>
          <router-link
            v-else
            to="/admin/dashboard"
            @click="isMobileMenuOpen = false"
            class="bg-[#d97706] hover:bg-[#b45309] text-white px-4 py-1.5 rounded-full text-xs transition font-bold text-center cursor-pointer"
          >
            Dashboard
          </router-link>
        </div>
      </div>
    </transition>
  </header>
</template>

<script setup>
import { ref, computed } from 'vue';
import { useRouter, useRoute } from 'vue-router';
import { useAuthStore } from '../stores/authStore';
import { useFilterStore } from '../stores/filterStore';
import { useThemeStore } from '../stores/themeStore';
import logoImg from '../assets/images/logo/iasdelhi_logo.png';

const authStore = useAuthStore();
const filterStore = useFilterStore();
const themeStore = useThemeStore();
const router = useRouter();
const route = useRoute();

const isDropdownOpen = ref(false);
const isMobileMenuOpen = ref(false);
const isMobileCoursesOpen = ref(false);

const coursesDropdown = [
  { name: 'MEDICAL SCIENCE OPTIONAL TEST SERIES', route: '/services/medical-science-optional' },
  { name: 'DAILY ANSWER WRITING- MEDICAL SCIENCE', route: '/services/medical-science-optional', query: { tab: 'daily-aw' } },
  { name: 'MEDICAL SCIENCE STUDY MATERIAL', route: '/services/medical-science-optional', query: { tab: 'study-material' } },
  { name: 'GS REVISION & DAILY ANSWER WRITING', query: { category: 'General Studies' } },
  { name: 'SOCIOLOGY OPTIONAL PROGRAMS', route: '/services/sociology-optional' },
  { name: 'PUBLIC ADMINISTRATION PROGRAMS', route: '/services/public-administration' },
  { name: 'ANTHROPOLOGY OPTIONAL PROGRAMS', route: '/services/anthropology-optional-programs' }
];

const handleProgramClick = (item) => {
  if (item.route) {
    isDropdownOpen.value = false;
    isMobileMenuOpen.value = false;
    if (item.query) {
      router.push({ path: item.route, query: item.query });
    } else {
      router.push(item.route);
    }
    return;
  }
  filterStore.setCategory(item.query.category);
  filterStore.setSearchQuery(item.query.search || '');
  isDropdownOpen.value = false;
  isMobileMenuOpen.value = false;
  router.push('/courses');
};

const handleCoursesNavClick = () => {
  filterStore.clearFilters();
  isDropdownOpen.value = false;
  isMobileMenuOpen.value = false;
  router.push('/courses');
};

const handleQuickFilter = (category, search) => {
  filterStore.setCategory(category || '');
  filterStore.setSearchQuery(search || '');
  isDropdownOpen.value = false;
  isMobileMenuOpen.value = false;
  router.push('/courses');
};

const isCoursesActive = computed(() => {
  return route.path.startsWith('/courses') && 
         filterStore.category !== 'General Studies' && 
         filterStore.searchQuery !== 'Test Series' && 
         filterStore.searchQuery !== 'Study Material' && 
         filterStore.searchQuery !== 'Current Affairs';
});</script>

<style scoped>
.slide-down-enter-active,
.slide-down-leave-active {
  transition: all 0.2s ease-out;
}
.slide-down-enter-from,
.slide-down-leave-to {
  transform: translateY(-8px);
  opacity: 0;
}
</style>
