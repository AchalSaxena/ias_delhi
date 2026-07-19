<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Sociology Optional</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Comprehensive Sociology optional guidance under Praveen Kishore Sir — foundation course, test series, and mentorship.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="Sociology Optional" />

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

          <!-- TAB: Foundation Course -->
          <div v-if="activeTab === 'foundation'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">Sociology Foundation Course 2027</h2>
              <p class="text-xs text-gray-400 mt-1">Evaluated by Praveen Kishore Sir</p>
            </div>

            <!-- Banner Image -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgSociology" alt="Sociology Optional Programs" class="w-full h-auto object-contain block" />
            </div>

            <!-- Program Details -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                📋 Program Details
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                  <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Duration</span>
                  <span class="text-white font-bold text-sm">5 Months</span>
                </div>
                <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                  <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Class Timings</span>
                  <span class="text-white font-bold text-sm">2 PM to 4 PM</span>
                </div>
                <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                  <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Class Days</span>
                  <span class="text-white font-bold text-sm">5 days/week</span>
                </div>
              </div>
            </div>

            <!-- Fee Structure -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                💵 Fee Structure
              </h3>
              <div class="bg-neutral-900 border border-amber-500/30 rounded-xl p-6 text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-[#ffd504] text-black font-extrabold text-[8px] px-2.5 py-0.5 rounded-bl uppercase tracking-wide">Hybrid</div>
                <h4 class="font-bold text-[#ffd504] text-xs uppercase tracking-wider mb-2">Foundation Course (Hybrid Mode)</h4>
                <p class="text-3xl font-black text-[#ffd504]">₹ 30,000</p>
                <p class="text-[10px] text-gray-400 mt-2">Offline/Online mode with 1-year recording access</p>
              </div>
              <div class="flex flex-wrap gap-4 justify-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform" target="_blank"
                  class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer">
                  📝 Click Here to Register &amp; Apply
                </a>
                <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Sociology%20Foundation%20Course." target="_blank"
                  class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg cursor-pointer">
                  💬 Inquire via WhatsApp
                </a>
              </div>
            </div>
          </div>

          <!-- TAB: Test Series -->
          <div v-else-if="activeTab === 'test-series'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">Sociology Test Series cum Mentorship 2027</h2>
              <p class="text-xs text-gray-400 mt-1">Evaluated by Praveen Kishore Sir</p>
            </div>

            <!-- Banner Image -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgSociology" alt="Sociology Test Series" class="w-full h-auto object-contain block" />
            </div>

            <!-- Program Details -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                📋 Test Series Details
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                  <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Topic-wise Tests</span>
                  <span class="text-white font-bold text-2xl">20</span>
                </div>
                <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                  <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Comprehensive Tests</span>
                  <span class="text-white font-bold text-2xl">4</span>
                </div>
              </div>
            </div>

            <!-- Fee Structure -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                💵 Fee Structure
              </h3>
              <div class="bg-neutral-900 border border-amber-500/30 rounded-xl p-6 text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-[#ffd504] text-black font-extrabold text-[8px] px-2.5 py-0.5 rounded-bl uppercase tracking-wide">Mentorship</div>
                <h4 class="font-bold text-[#ffd504] text-xs uppercase tracking-wider mb-2">Test Series cum Mentorship</h4>
                <p class="text-3xl font-black text-[#ffd504]">₹ 20,000</p>
                <p class="text-[10px] text-gray-400 mt-2">Evaluated by Praveen Kishore Sir (9910944333)</p>
              </div>
              <div class="flex flex-wrap gap-4 justify-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform" target="_blank"
                  class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer">
                  📝 Click Here to Register &amp; Apply
                </a>
                <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Sociology%20Test%20Series." target="_blank"
                  class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg cursor-pointer">
                  💬 Inquire via WhatsApp
                </a>
              </div>
            </div>
          </div>

          <!-- Coordinator Support -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
              <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">📞 Talk to our Program Advisors</h4>
              <p class="text-xs text-gray-400">Direct query resolution and personalized mentorship information.</p>
            </div>
            <div class="flex flex-wrap gap-4 text-xs font-mono font-bold text-white">
              <a href="tel:7678249423" class="hover:text-amber-400 transition bg-neutral-900 px-4 py-2.5 rounded border border-neutral-800">
                Adesh sir: 7678249423
              </a>
              <a href="tel:9910944333" class="hover:text-amber-400 transition bg-neutral-900 px-4 py-2.5 rounded border border-neutral-800">
                Praveen Kishore sir: 9910944333
              </a>
            </div>
          </div>

        </main>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import ServiceSidebar from '../components/ServiceSidebar.vue';
import imgSociology from '../assets/images/misc/sociology_optional_programs.jpg';

const tabs = [
  { id: 'foundation', label: 'Foundation Course' },
  { id: 'test-series', label: 'Test Series cum Mentorship' }
];

const activeTab = ref('foundation');
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
