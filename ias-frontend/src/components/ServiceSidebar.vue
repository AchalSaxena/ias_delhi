<template>
  <aside class="lg:col-span-1">
    <div class="sticky top-20 bg-neutral-950 border border-neutral-800 rounded-xl overflow-hidden shadow-xl">
      <div class="bg-neutral-900 px-4 py-3 border-b border-neutral-800">
        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest">Sidebar Navigation</h3>
      </div>
      <nav class="flex flex-col text-xs font-bold text-gray-300">
        <button 
          v-for="item in sidebarItems" 
          :key="item.name"
          @click="handleSidebarClick(item)"
          class="w-full text-left px-4 py-3.5 border-b border-neutral-900 hover:bg-neutral-900 hover:text-white transition uppercase tracking-wider last:border-0 cursor-pointer"
          :class="item.name === activeItem ? 'bg-[#ffd504] text-black hover:bg-[#ffd504] hover:text-black font-black' : ''"
        >
          {{ item.name }}
        </button>
      </nav>
    </div>
  </aside>
</template>

<script setup>
import { useRouter } from 'vue-router';
import { useFilterStore } from '../stores/filterStore';

const props = defineProps({
  activeItem: {
    type: String,
    default: ''
  }
});

const router = useRouter();
const filterStore = useFilterStore();

const sidebarItems = [
  { name: 'Medical Science Optional', route: '/services/medical-science-optional' },
  { name: 'Daily Answer Writing (Med Sci)', route: '/services/medical-science-optional', query: { tab: 'daily-aw' } },
  { name: 'Medical Science Study Material', route: '/services/medical-science-optional', query: { tab: 'study-material' } },
  { name: 'GS Mentorship Program', route: '/courses', query: { category: 'General Studies' } },
  { name: 'Sociology Optional', route: '/services/sociology-optional' },
  { name: 'Public Administration Optional', route: '/services/public-administration' },
  { name: 'Anthropology Optional', route: '/services/anthropology-optional-programs' },
  { name: "IDI's Selections", route: '/about' },
  { name: "Toppers' Answer Copies", route: '/services/toppers-answer-copies' },
  { name: "Toppers' Testimonials", route: '/services/toppers-testimonials' },
  { name: 'Faculty Members', route: '/about' },
  { name: 'YouTube Channel Videos', route: 'https://www.youtube.com/@iasdelhi', external: true },
  { name: 'IDI Telegram Channel', route: 'https://t.me/iasdelhi', external: true },
  { name: 'Student Rooms Directory', route: 'https://t.me/MH_Rooms_Delhi2', external: true }
];

const handleSidebarClick = (item) => {
  if (item.name === props.activeItem) return;
  if (item.external) {
    window.open(item.route, '_blank');
    return;
  }
  if (item.query) {
    filterStore.setCategory(item.query.category || '');
    filterStore.setSearchQuery(item.query.search || '');
    router.push({ path: item.route, query: item.query });
  } else {
    filterStore.clearFilters();
    router.push(item.route);
  }
};
</script>
