<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Medical Science Optional</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Comprehensive test series, daily answer writing, and study material for Medical Science optional — guided by UPSC toppers.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="Medical Science Optional" />

        <main class="lg:col-span-3 space-y-12">

          <!-- Tab Navigation -->
          <div class="flex border-b border-neutral-800 overflow-x-auto">
            <button 
              v-for="tab in tabs" 
              :key="tab.id"
              @click="activeTab = tab.id"
              class="px-5 py-3.5 font-bold uppercase tracking-wider text-xs md:text-sm border-b-2 transition focus:outline-none cursor-pointer whitespace-nowrap"
              :class="activeTab === tab.id ? 'border-[#ffd504] text-white font-black' : 'border-transparent text-gray-400 hover:text-gray-200'"
            >
              {{ tab.label }}
            </button>
          </div>

          <!-- TAB: Test Series -->
          <div v-if="activeTab === 'test-series'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">Medical Science Optional Test Series</h2>
              <div class="flex flex-wrap items-center gap-3.5 text-xs font-bold mt-2">
                <span class="bg-red-500/10 text-red-400 px-3 py-1 rounded border border-red-500/20 uppercase">
                  📅 100% flexible schedules valid until January 2027
                </span>
              </div>
            </div>

            <!-- Banner Image -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgTestSeries" alt="Medical Science Optional Test Series" class="w-full h-auto object-contain block" />
            </div>

            <!-- Topper Guidance -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                🎓 UPSC Toppers' Guidance
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div v-for="topper in toppers" :key="topper.name" class="flex items-center gap-3 bg-neutral-900/50 p-3 rounded-xl border border-neutral-850">
                  <span class="w-2 h-2 rounded-full bg-amber-400 flex-shrink-0"></span>
                  <span class="text-gray-300 text-xs leading-relaxed" v-html="topper"></span>
                </div>
              </div>
            </div>

            <!-- Core Offerings -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                📋 Core Offerings
              </h3>
              <ul class="space-y-3">
                <li v-for="(item, i) in testSeriesFeatures" :key="i" class="flex items-start gap-2.5 text-xs text-gray-300 leading-relaxed">
                  <span class="text-amber-400 mt-0.5">✓</span>
                  <span v-html="item"></span>
                </li>
              </ul>
            </div>

            <!-- Fee Structure -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                💵 Fee Structure
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Offline Mode</h4>
                  <p class="text-2xl font-black text-white">₹ 10,000</p>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Online Mode</h4>
                  <p class="text-2xl font-black text-white">₹ 8,000</p>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Offline (with Notes)</h4>
                  <p class="text-2xl font-black text-white">₹ 12,000</p>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Online (with Notes)</h4>
                  <p class="text-2xl font-black text-white">₹ 10,000</p>
                </div>
              </div>
              <p class="text-xs text-gray-400 text-center">Group Discount: Groups of 2+ receive ₹1,000 off per student.</p>
              <div class="flex flex-wrap gap-4 justify-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform" target="_blank"
                  class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer">
                  📝 Click Here to Register &amp; Apply
                </a>
                <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Medical%20Science%20Test%20Series." target="_blank"
                  class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg flex items-center gap-1.5 cursor-pointer">
                  💬 Inquire via WhatsApp
                </a>
              </div>
            </div>
          </div>

          <!-- TAB: Daily Answer Writing -->
          <div v-else-if="activeTab === 'daily-aw'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">Daily Answer Writing — Medical Science</h2>
            </div>

            <!-- Banner Image -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgDailyAW" alt="Daily Answer Writing Medical Science" class="w-full h-auto object-contain block" />
            </div>

            <!-- Fee Structure -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                💵 Schedules &amp; Fees
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">4 Months Program (120 Days)</h4>
                  <p class="text-2xl font-black text-white">₹ 16,000</p>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">2 Months Program (60 Days)</h4>
                  <p class="text-2xl font-black text-white">₹ 12,000</p>
                </div>
              </div>
            </div>

            <!-- Day-wise targets -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                📅 Day-wise Subject Targets (120 Days)
              </h3>
              <div class="border border-neutral-850 rounded-xl overflow-hidden text-xs">
                <div class="grid grid-cols-2 bg-neutral-900 py-3 border-b border-neutral-850 text-gray-400 font-bold uppercase tracking-wider text-center">
                  <span class="border-r border-neutral-850">Days</span>
                  <span>Subject</span>
                </div>
                <div class="divide-y divide-neutral-900 text-gray-300">
                  <div v-for="(item, i) in dayWiseSchedule" :key="i" class="grid grid-cols-2 py-3 text-center items-center hover:bg-neutral-900/30 transition">
                    <span class="font-bold text-amber-400 border-r border-neutral-900">{{ item.days }}</span>
                    <span>{{ item.subject }}</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex flex-wrap gap-4 justify-center">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform" target="_blank"
                class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer">
                📝 Register Now
              </a>
              <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Medical%20Science%20Daily%20Answer%20Writing." target="_blank"
                class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg cursor-pointer">
                💬 Inquire via WhatsApp
              </a>
            </div>
          </div>

          <!-- TAB: Study Material -->
          <div v-else-if="activeTab === 'study-material'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">Medical Science Study Material</h2>
            </div>

            <!-- Banner Image -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgStudyMaterial" alt="Medical Science Study Material" class="w-full h-auto object-contain block" />
            </div>

            <!-- Booklets -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                📚 Available Booklets
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 text-center">
                  <h4 class="font-bold text-white text-sm uppercase tracking-wider mb-2">Complete PYQs Analysis Book</h4>
                  <p class="text-2xl font-black text-[#ffd504]">₹ 500</p>
                  <span class="text-[10px] text-gray-500 mt-2 block">(incl. courier charges)</span>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 text-center">
                  <h4 class="font-bold text-white text-sm uppercase tracking-wider mb-2">Comprehensive Notes on Entire Syllabus</h4>
                  <p class="text-2xl font-black text-[#ffd504]">₹ 3,000</p>
                  <span class="text-[10px] text-gray-500 mt-2 block">(incl. courier charges)</span>
                </div>
              </div>
              <div class="flex flex-wrap gap-4 justify-center pt-4">
                <a href="https://forms.gle/fVpBKeUgySzP7KRt9" target="_blank"
                  class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer">
                  📝 Order Booklets
                </a>
                <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20order%20Medical%20Science%20Study%20Material." target="_blank"
                  class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg cursor-pointer">
                  💬 Inquire via WhatsApp
                </a>
              </div>
            </div>
          </div>

          <!-- Coordinator Support (common) -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
              <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">📞 Talk to our Program Advisors</h4>
              <p class="text-xs text-gray-400">Direct query resolution and personalized mentorship information.</p>
            </div>
            <div class="flex flex-wrap gap-4 text-xs font-mono font-bold text-white">
              <a href="tel:7678249423" class="hover:text-amber-400 transition bg-neutral-900 px-4 py-2.5 rounded border border-neutral-800">
                Adesh sir: 7678249423
              </a>
              <a href="tel:8527965204" class="hover:text-amber-400 transition bg-neutral-900 px-4 py-2.5 rounded border border-neutral-800">
                Gajanan sir: 8527965204
              </a>
            </div>
          </div>

        </main>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, watch } from 'vue';
import { useRoute } from 'vue-router';
import ServiceSidebar from '../components/ServiceSidebar.vue';

import imgTestSeries from '../assets/images/misc/medical_science_optional_test_series.jpg';
import imgDailyAW from '../assets/images/misc/daily_answer_writing__medical_science.jpg';
import imgStudyMaterial from '../assets/images/misc/medical_science_study_material.jpeg';

const route = useRoute();

const tabs = [
  { id: 'test-series', label: 'Test Series' },
  { id: 'daily-aw', label: 'Daily Answer Writing' },
  { id: 'study-material', label: 'Study Material' }
];

const activeTab = ref('test-series');

watch(() => route.query.tab, (tab) => {
  if (tab && tabs.find(t => t.id === tab)) {
    activeTab.value = tab;
  }
}, { immediate: true });

const toppers = [
  '<strong>Dr. Ishika Singh</strong> (AIR 206)',
  '<strong>Dr. Aaditya Sharma</strong> (IAS)',
  '<strong>Dr. Anshu Priya</strong> (AIR 16)',
  '<strong>Dr. Aswathy Sriniwas</strong> (AIR 40)',
  '<strong>Dr. Akshita Gupta</strong> (AIR 69)'
];

const testSeriesFeatures = [
  'Test discussion videos of all Full-Length Tests',
  'UPSC Toppers\' guidance sessions',
  '100% flexible schedules valid until January 2027',
  'Rapid evaluation within 4 days with model answers',
  'Group discount: Groups of 2+ receive ₹1,000 off per student'
];

const dayWiseSchedule = [
  { days: 'Day 1 – 11', subject: 'Anatomy' },
  { days: 'Day 12 – 21', subject: 'Physiology' },
  { days: 'Day 22 – 27', subject: 'Biochemistry' },
  { days: 'Day 28 – 37', subject: 'Pharmacology' },
  { days: 'Day 38 – 45', subject: 'Pathology' },
  { days: 'Day 46 – 52', subject: 'Forensic Medicine & Toxicology (FMT)' },
  { days: 'Day 53 – 60', subject: 'Microbiology' },
  { days: 'Day 61 – 75', subject: 'Medicine' },
  { days: 'Day 76 – 79', subject: 'Psychiatry' },
  { days: 'Day 80 – 82', subject: 'Dermatology' },
  { days: 'Day 83 – 90', subject: 'Paediatrics' },
  { days: 'Day 91 – 100', subject: 'OBGYN' },
  { days: 'Day 101 – 112', subject: 'Surgery' },
  { days: 'Day 113 – 120', subject: 'PSM (Preventive & Social Medicine)' }
];
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
.border-neutral-850 { border-color: #262626; }
</style>
