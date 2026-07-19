<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:4xl font-black mb-2 tracking-wide drop-shadow-md">Public Administration Optional</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Comprehensive Public Administration mentorship program — Paper I &amp; II daily PYQ writing with experienced faculty guidance.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="Public Administration Optional" />

        <main class="lg:col-span-3 space-y-12">

          <!-- Banner Image -->
          <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
            <img :src="imgPubAdmin" alt="Public Administration Programs" class="w-full h-auto object-contain block" />
          </div>

          <!-- Program Details -->
          <div>
            <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">Public Administration Mentorship Program 2027</h2>
          </div>

          <!-- Course Parameters -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              📋 Program Details
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Format</span>
                <span class="text-white font-bold text-sm">5 Months / 3 Months Daily PYQs</span>
              </div>
              <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Paper I Duration</span>
                <span class="text-white font-bold text-sm">75 Days</span>
              </div>
              <div class="bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 text-center">
                <span class="text-[10px] text-gray-400 uppercase tracking-wider block mb-1">Paper II Duration</span>
                <span class="text-white font-bold text-sm">65 Days</span>
              </div>
            </div>
          </div>

          <!-- Fee Structure -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              💵 Fee Structure
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center flex flex-col justify-between">
                <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Paper-I Only</h4>
                <p class="text-2xl font-black text-white">₹ 7,500</p>
                <span class="text-[10px] text-gray-500 mt-2 block">(inclusive of all taxes)</span>
              </div>
              <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center flex flex-col justify-between">
                <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Paper-II Only</h4>
                <p class="text-2xl font-black text-white">₹ 7,500</p>
                <span class="text-[10px] text-gray-500 mt-2 block">(inclusive of all taxes)</span>
              </div>
              <div class="bg-neutral-900 border border-amber-500/30 rounded-xl p-5 text-center flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-[#ffd504] text-black font-extrabold text-[8px] px-2.5 py-0.5 rounded-bl uppercase tracking-wide">Popular</div>
                <h4 class="font-bold text-[#ffd504] text-xs uppercase tracking-wider mb-2">Both Papers I &amp; II</h4>
                <p class="text-2xl font-black text-[#ffd504]">₹ 14,000</p>
                <span class="text-[10px] text-gray-400 mt-2 block">(Save ₹ 1,000 · incl. of all taxes)</span>
              </div>
            </div>
            <p class="text-xs text-gray-400 text-center">Evaluated by <strong class="text-white">Gajanan Sir</strong> / <strong class="text-white">Adesh Sir</strong></p>
            <div class="flex flex-wrap gap-4 justify-center">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform" target="_blank"
                class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer">
                📝 Click Here to Register &amp; Apply
              </a>
              <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Public%20Administration%20Mentorship%20Program." target="_blank"
                class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg cursor-pointer">
                💬 Inquire via WhatsApp
              </a>
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
import ServiceSidebar from '../components/ServiceSidebar.vue';
import imgPubAdmin from '../assets/images/misc/public_administration_programs.jpg';
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
