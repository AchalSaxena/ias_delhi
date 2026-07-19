<template>
  <div>
    <!-- Hero Header Banner (Consistent Dark Academic Gradient) -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Site Directory</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          A comprehensive directory of courses, test series, mentorship programs, toppers resources, and pages of IAS Delhi Institute (IDI).
        </p>
      </div>
    </section>

    <!-- Sitemap content -->
    <div class="container mx-auto px-4 py-12 max-w-7xl">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Column 1: Core Navigation & Info -->
        <div class="space-y-8">
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 hover:border-neutral-750 transition duration-300">
            <h3 class="text-base font-black text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 mb-4 flex items-center gap-2">
              🧭 Core Navigation
            </h3>
            <ul class="space-y-3.5 text-xs font-bold uppercase tracking-wider text-gray-300">
              <li>
                <router-link to="/" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Home Page
                </router-link>
              </li>
              <li>
                <router-link to="/courses" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Programs / Courses Directory
                </router-link>
              </li>
              <li>
                <router-link to="/about" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> About Us (IDI details)
                </router-link>
              </li>
              <li>
                <router-link to="/contact" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Contact &amp; Center Address
                </router-link>
              </li>
              <li>
                <router-link to="/privacy-policy" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Privacy Policy
                </router-link>
              </li>
              <li>
                <router-link to="/terms-and-conditions" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Terms and Conditions
                </router-link>
              </li>
            </ul>
          </div>

          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 hover:border-neutral-750 transition duration-300">
            <h3 class="text-base font-black text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 mb-4 flex items-center gap-2">
              🎓 Optional Subjects (GS &amp; Humanities)
            </h3>
            <div class="space-y-4">
              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">General Studies Mentorship</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('General Studies')" class="hover:text-white transition">
                      8 Months-GS Pre-cum-Mains Mentorship 2027
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('General Studies')" class="hover:text-white transition">
                      6 Months-General Studies PcM Mentorship 2027
                    </router-link>
                  </li>
                </ul>
              </div>

              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Sociology Programs</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Sociology')" class="hover:text-white transition">
                      Sociology Foundation Course 2027
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Sociology')" class="hover:text-white transition">
                      Sociology Test Series cum Mentorship 2027
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Sociology')" class="hover:text-white transition">
                      Sociology Test Series cum Mentorship 2026
                    </router-link>
                  </li>
                </ul>
              </div>

              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Public Administration</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Public Administration')" class="hover:text-white transition">
                      Public Administration Mentorship (5 Months)
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Public Administration')" class="hover:text-white transition">
                      Public Administration Mentorship (3 Months)
                    </router-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Column 2: Medical Science Optional -->
        <div class="space-y-8">
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 hover:border-neutral-750 transition duration-300">
            <h3 class="text-base font-black text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 mb-4 flex items-center gap-2">
              🩺 Medical Science Department
            </h3>
            <div class="space-y-4">
              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Optional Test Series</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      Medical Science Test Series 2026-27 (A)
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      Medical Science Test Series 2026-27 (B)
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      Medical Science Test Series 2026 (C)
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      Medical Science Test Series 2026 (D)
                    </router-link>
                  </li>
                </ul>
              </div>

              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Daily Answer Writing (DAW)</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      Daily Answer Writing (4 Months)
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      Daily Answer Writing (2 Months)
                    </router-link>
                  </li>
                </ul>
              </div>

              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Study Material Packages</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      1. Complete PYQs Analysis Book
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setCategory('Medical Science')" class="hover:text-white transition">
                      2. Comprehensive Notes on Syllabus
                    </router-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 hover:border-neutral-750 transition duration-300">
            <h3 class="text-base font-black text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 mb-4 flex items-center gap-2">
              🦴 Anthropology Special Program
            </h3>
            <ul class="space-y-3.5 text-xs font-bold text-gray-300">
              <li>
                <router-link to="/services/anthropology-optional-programs" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Anthropology Daily PYQ Focus Group (2 Months)
                </router-link>
              </li>
              <li>
                <router-link to="/services/anthropology-optional-programs" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> Anthropology Test Series cum Evaluator
                </router-link>
              </li>
            </ul>
          </div>
        </div>

        <!-- Column 3: Resources & Social Channels -->
        <div class="space-y-8">
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 hover:border-neutral-750 transition duration-300">
            <h3 class="text-base font-black text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 mb-4 flex items-center gap-2">
              ⭐ Toppers Resources &amp; Selections
            </h3>
            <div class="space-y-4">
              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Toppers' Answer Copies</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/courses" @click="filterStore.setSearchQuery('Answer Copies')" class="hover:text-white transition">
                      Pratik Juikar (AIR 177) Anthropology Copy
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setSearchQuery('Answer Copies')" class="hover:text-white transition">
                      Dr. Akshita Gupta (AIR 69) Essay Copy
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setSearchQuery('Answer Copies')" class="hover:text-white transition">
                      P. Srija (AIR 20) Medical Science Copy
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/courses" @click="filterStore.setSearchQuery('Answer Copies')" class="hover:text-white transition">
                      Amit Ranjan (AIR 431) PSIR Copy
                    </router-link>
                  </li>
                </ul>
              </div>

              <div>
                <h4 class="text-xs font-extrabold text-white uppercase tracking-wider mb-2">Selections Gallery</h4>
                <ul class="space-y-2 text-xs text-gray-400 pl-3 border-l border-neutral-800">
                  <li>
                    <router-link to="/about" class="hover:text-white transition">
                      IDI UPSC Selections (2022, 2023, 2024, 2025)
                    </router-link>
                  </li>
                  <li>
                    <router-link to="/about" class="hover:text-white transition">
                      Toppers' Video Testimonials
                    </router-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 hover:border-neutral-750 transition duration-300">
            <h3 class="text-base font-black text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 mb-4 flex items-center gap-2">
              🔗 Social &amp; Community Channels
            </h3>
            <ul class="space-y-3.5 text-xs font-bold text-gray-300">
              <li>
                <a href="https://t.me/iasdelhi" target="_blank" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> IDI Telegram Channel (Updates &amp; PDFs)
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/@iasdelhi" target="_blank" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> YouTube Channel (Strategy &amp; Topper Talks)
                </a>
              </li>
              <li>
                <a href="https://maps.app.goo.gl/1mgFBMZ9AwxcKnUp6" target="_blank" class="hover:text-[#ffd504] transition flex items-center gap-2">
                  <span class="text-[#ffd504]">▪</span> MH Rooms in Delhi UPSC Maps Location
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
import { useFilterStore } from '../stores/filterStore';
const filterStore = useFilterStore();
</script>

<style scoped>
.about-hero {
  position: relative;
  background: linear-gradient(135deg, #090d16 0%, #111827 100%);
}

.hero-bg-pattern {
  background-size: 40px 40px;
  background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
}

.border-neutral-850 {
  border-color: #262626;
}

.bg-neutral-850 {
  background-color: #262626;
}
</style>
