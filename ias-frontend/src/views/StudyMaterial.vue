<template>
  <div>
    <!-- Hero Header (Academic Theme) -->
    <section class="courses-hero text-white py-12 md:py-14 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-3xl md:text-4xl font-black mb-3 tracking-wide drop-shadow-md">Study Resources &amp; Library</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Explore our comprehensive curriculum, previous years question papers, and topper mock test copies designed for UPSC CSE aspirants.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-12">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <!-- Filters Sidebar -->
        <div class="lg:col-span-1">
          <div class="bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-800 rounded-2xl p-6 shadow-sm">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-5">Filters</h3>

            <!-- Search Field -->
            <div class="mb-6">
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-2">Search Resources</label>
              <div class="relative">
                <input
                  v-model="searchQuery"
                  type="text"
                  placeholder="Syllabus, notes, papers..."
                  class="w-full pl-3 pr-8 py-2.5 bg-gray-50 dark:bg-neutral-950 border border-gray-250 dark:border-neutral-800 rounded-lg text-sm text-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary"
                />
                <span class="absolute right-2.5 top-1/2 -translate-y-1/2 text-gray-400">🔍</span>
              </div>
            </div>

            <!-- Categories -->
            <div class="mb-6">
              <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-3">Categories</label>
              <div class="space-y-3">
                <label 
                  v-for="cat in categories" 
                  :key="cat" 
                  class="flex items-center gap-3 cursor-pointer group text-sm"
                >
                  <input
                    type="radio"
                    name="category"
                    :value="cat"
                    v-model="selectedCategory"
                    class="w-4.5 h-4.5 rounded-full border border-gray-300 dark:border-neutral-700 text-primary focus:ring-primary accent-primary"
                  />
                  <span class="text-gray-700 dark:text-gray-300 group-hover:text-primary transition">
                    {{ cat }}
                  </span>
                </label>
              </div>
            </div>

            <!-- Clear All Button -->
            <button
              @click="clearFilters"
              class="w-full bg-white dark:bg-neutral-950 text-[#d97706] hover:bg-neutral-50 dark:hover:bg-neutral-900 border border-[#d97706] py-2.5 rounded-lg text-sm font-bold transition cursor-pointer"
            >
              Clear All Filters
            </button>
          </div>
        </div>

        <!-- Catalog Section -->
        <div class="lg:col-span-3">
          <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <div>
              <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">UPSC Material List</h2>
              <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Showing {{ filteredMaterials.length }} study items matching your criteria.</p>
            </div>
            
            <!-- Sort Filter -->
            <div class="flex items-center gap-2">
              <span class="text-xs text-gray-500">Sort by:</span>
              <select 
                v-model="sortBy"
                class="bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-800 rounded-lg px-3 py-1.5 text-xs text-gray-700 dark:text-gray-300 focus:outline-none"
              >
                <option value="latest">Latest Published</option>
                <option value="popular">Most Downloaded</option>
              </select>
            </div>
          </div>

          <!-- Materials Grid -->
          <div v-if="filteredMaterials.length === 0" class="text-center py-16 bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-800 rounded-2xl">
            <p class="text-gray-500 dark:text-gray-400 mb-3">No study material found matching your query.</p>
            <button @click="clearFilters" class="text-primary hover:underline text-sm font-semibold">Reset filters</button>
          </div>
          
          <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div 
              v-for="item in filteredMaterials" 
              :key="item.id"
              class="flex flex-col bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition transform hover:-translate-y-1 group"
            >
              <!-- Card Header Badge overlay -->
              <div class="relative aspect-video bg-gray-100 dark:bg-neutral-950 overflow-hidden flex items-center justify-center">
                <div class="absolute top-3 left-3 bg-[#3B82F6]/10 text-[#3B82F6] dark:text-[#93c5fd] text-[10px] font-black uppercase px-2.5 py-1 rounded-full tracking-wider">
                  {{ item.tag }}
                </div>
                <!-- Abstract visual placeholder representing UPSC subjects -->
                <div class="w-full h-full flex flex-col justify-center items-center text-center p-4 bg-gradient-to-br from-neutral-50 to-neutral-200 dark:from-neutral-900 dark:to-neutral-950 select-none">
                  <span class="text-4xl mb-2">{{ item.icon }}</span>
                  <span class="text-[10px] text-gray-400 dark:text-gray-500 font-bold uppercase tracking-widest">IAS Delhi</span>
                </div>
              </div>

              <!-- Content Body -->
              <div class="p-5 flex-grow flex flex-col justify-between">
                <div>
                  <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2 group-hover:text-primary transition line-clamp-2">
                    {{ item.title }}
                  </h3>
                  <p class="text-xs text-gray-600 dark:text-gray-400 mb-3 flex items-center gap-1">
                    <span>👨‍🏫</span> {{ item.author }}
                  </p>
                  
                  <div class="flex items-center gap-2 mb-4 text-[11px] text-gray-500 dark:text-gray-400">
                    <span class="bg-gray-100 dark:bg-neutral-850 px-2 py-0.5 rounded">{{ item.level }}</span>
                    <span>•</span>
                    <span>{{ item.type }}</span>
                  </div>
                </div>

                <!-- Footer Call to Action -->
                <div class="flex items-center justify-between border-t border-gray-100 dark:border-neutral-800 pt-4 mt-2">
                  <span class="text-xs font-black text-green-600 dark:text-green-400 uppercase tracking-wider">Free Access</span>
                  <a 
                    :href="item.link" 
                    target="_blank" 
                    class="text-xs font-bold text-[#d97706] hover:text-[#b45309] hover:underline flex items-center gap-1 transition"
                  >
                    Download / View <span class="text-sm">›</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination Component -->
          <div class="flex justify-center items-center gap-2 mt-12">
            <button class="w-8 h-8 rounded-full border border-gray-200 dark:border-neutral-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-neutral-900 transition">
              ‹
            </button>
            <button class="w-8 h-8 rounded-full bg-[#d97706] text-white flex items-center justify-center text-sm font-bold shadow-md">
              1
            </button>
            <button class="w-8 h-8 rounded-full border border-gray-200 dark:border-neutral-800 flex items-center justify-center text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-neutral-900 transition">
              2
            </button>
            <button class="w-8 h-8 rounded-full border border-gray-200 dark:border-neutral-800 flex items-center justify-center text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-neutral-900 transition">
              3
            </button>
            <span class="text-gray-400">...</span>
            <button class="w-8 h-8 rounded-full border border-gray-200 dark:border-neutral-800 flex items-center justify-center text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-neutral-900 transition">
              12
            </button>
            <button class="w-8 h-8 rounded-full border border-gray-200 dark:border-neutral-800 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-neutral-900 transition">
              ›
            </button>
          </div>

        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const searchQuery = ref('');
const selectedCategory = ref('All Categories');
const sortBy = ref('latest');

const categories = [
  'All Categories',
  'General Studies',
  'Optional Subjects',
  'CSAT',
  'Answer Writing Copies',
  'Syllabus & Guides'
];

const mockMaterials = [
  {
    id: 1,
    title: "UPSC Civil Services Examination Complete Syllabus & Pattern Guidelines",
    tag: "SYLLABUS",
    icon: "📋",
    author: "IAS Delhi Academic Committee",
    level: "All Levels",
    type: "PDF Syllabus Guide",
    category: "Syllabus & Guides",
    link: "https://iasdelhi.org/"
  },
  {
    id: 2,
    title: "Medical Science Optional Paper I Topper Mock Answer Copy - AIR 22",
    tag: "TOPPER COPIES",
    icon: "✍️",
    author: "Dr. Rajesh Khanna & Topper Team",
    level: "Mains Special",
    type: "Answer Copy Sheet",
    category: "Answer Writing Copies",
    link: "https://drive.google.com/file/d/1MMYoB8rFGaDEHC8XdTv_T43fh6bNZsSC/view?pli=1"
  },
  {
    id: 3,
    title: "Monthly Current Affairs Analysis Booklet & Trend Review - June 2026",
    tag: "CURRENT AFFAIRS",
    icon: "📰",
    author: "IDI Editorial Board",
    level: "Prelims & Mains",
    type: "Monthly Booklet",
    category: "General Studies",
    link: "https://iasdelhi.org/"
  },
  {
    id: 4,
    title: "CSAT Masterclass: Crucial Quantitative Formulas & Logical Reasonings Sheet",
    tag: "CSAT SPECIAL",
    icon: "📐",
    author: "Sandeep Verma (IIT-D)",
    level: "Prelims Special",
    type: "Formula Handout",
    category: "CSAT",
    link: "https://iasdelhi.org/"
  },
  {
    id: 5,
    title: "Sociology Optional: Important Thinkers, Core Concepts & Essay Templates",
    tag: "OPTIONAL SUBJECTS",
    icon: "📚",
    author: "Praveen Kishore Sir",
    level: "Optional Advanced",
    type: "Syllabus Notes",
    category: "Optional Subjects",
    link: "https://iasdelhi.org/"
  },
  {
    id: 6,
    title: "Anthropology Optional: previous Year Question Papers Analysis (2018-2025)",
    tag: "OPTIONAL SUBJECTS",
    icon: "🦴",
    author: "S. K. Mukherjee",
    level: "Optional Advanced",
    type: "PYQ Handout Booklet",
    category: "Optional Subjects",
    link: "https://iasdelhi.org/"
  }
];

const clearFilters = () => {
  searchQuery.value = '';
  selectedCategory.value = 'All Categories';
};

const filteredMaterials = computed(() => {
  return mockMaterials.filter(item => {
    // Category Filter
    const matchesCategory = selectedCategory.value === 'All Categories' || item.category === selectedCategory.value;
    
    // Search Query Filter
    const matchesSearch = item.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
                          item.tag.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
                          item.author.toLowerCase().includes(searchQuery.value.toLowerCase());
                          
    return matchesCategory && matchesSearch;
  });
});
</script>

<style scoped>
.courses-hero {
  position: relative;
  background: linear-gradient(135deg, #102a43 0%, #1e3e5c 100%);
}

.hero-bg-pattern {
  background-image: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.15) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(255,255,255,0.10) 0%, transparent 40%);
}

.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
