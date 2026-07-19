<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Toppers' Answer Copies</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Download verified answer copies of UPSC toppers from various optional subjects and GS mentorship programs.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="Toppers' Answer Copies" />

        <main class="lg:col-span-3 space-y-10">

          <!-- Banner Image -->
          <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
            <img :src="imgAnswerCopies" alt="Toppers Answer Copies" class="w-full h-auto object-contain block" />
          </div>

          <!-- Medical Science Section -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              🩺 Medical Science
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
              <div v-for="copy in medicalScienceCopies" :key="copy.name"
                class="flex items-center justify-between bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 hover:border-neutral-750 transition">
                <div>
                  <p class="text-white text-xs font-bold">{{ copy.name }}</p>
                  <p class="text-[10px] text-gray-500 mt-0.5">{{ copy.detail }}</p>
                </div>
                <span class="text-amber-400 text-xs font-bold">Download</span>
              </div>
            </div>
          </div>

          <!-- GS Mentorship Section -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              📚 GS Mentorship
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
              <div v-for="copy in gsCopies" :key="copy.name"
                class="flex items-center justify-between bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 hover:border-neutral-750 transition">
                <div>
                  <p class="text-white text-xs font-bold">{{ copy.name }}</p>
                  <p class="text-[10px] text-gray-500 mt-0.5">{{ copy.detail }}</p>
                </div>
                <span class="text-amber-400 text-xs font-bold">Download</span>
              </div>
            </div>
          </div>

          <!-- Anthropology Section -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              🔬 Anthropology
            </h3>
            <div class="grid grid-cols-1 gap-3">
              <div v-for="copy in anthropologyCopies" :key="copy.name"
                class="flex items-center justify-between bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 hover:border-neutral-750 transition">
                <div>
                  <p class="text-white text-xs font-bold">{{ copy.name }}</p>
                  <p class="text-[10px] text-gray-500 mt-0.5">{{ copy.detail }}</p>
                </div>
                <span class="text-amber-400 text-xs font-bold">Download</span>
              </div>
            </div>
          </div>

          <!-- PSIR Section -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              ⚖️ PSIR Optional
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
              <div v-for="copy in psirCopies" :key="copy.name"
                class="flex items-center justify-between bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 hover:border-neutral-750 transition">
                <div>
                  <p class="text-white text-xs font-bold">{{ copy.name }}</p>
                  <p class="text-[10px] text-gray-500 mt-0.5">{{ copy.detail }}</p>
                </div>
                <span class="text-amber-400 text-xs font-bold">Download</span>
              </div>
            </div>
          </div>

        </main>
      </div>
    </div>
  </div>
</template>

<script setup>
import ServiceSidebar from '../components/ServiceSidebar.vue';
import imgAnswerCopies from '../assets/images/misc/toppers__answer_copies.jpg';

const medicalScienceCopies = [
  { name: 'Dr. Ishika Singh', detail: 'AIR 206' },
  { name: 'Raunak Sharma', detail: 'AIR 659' },
  { name: 'Shivraj Gangawal', detail: 'AIR 788' },
  { name: 'Sachin Goel', detail: 'AIR 209' }
];

const gsCopies = [
  { name: 'Swami Shubham', detail: 'AIR 523' },
  { name: 'Anurag Ghuge', detail: 'AIR 624' }
];

const anthropologyCopies = [
  { name: 'Pratik Juikar', detail: 'AIR 177 — Tests 3 to 9' }
];

const psirCopies = [
  { name: 'Amit Ranjan', detail: 'AIR 431' },
  { name: 'Shubham Satyam', detail: 'AIR 497' }
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
