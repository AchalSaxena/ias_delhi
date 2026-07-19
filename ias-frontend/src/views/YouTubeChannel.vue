<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">YouTube Channel</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Watch strategy sessions, topper interviews, and preparation guidance from UPSC CSE qualifiers.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="YouTube Channel Videos" />

        <main class="lg:col-span-3 space-y-10">

          <!-- Banner Image -->
          <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
            <img :src="imgYouTube" alt="YouTube Channel Strategy Videos" class="w-full h-auto object-contain block" />
          </div>

          <!-- Channel CTA -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div>
              <h3 class="font-bold text-white text-sm uppercase tracking-wide">Subscribe to our YouTube Channel</h3>
              <p class="text-xs text-gray-400 mt-1">Stay updated with the latest strategy videos and preparation tips.</p>
            </div>
            <a href="https://www.youtube.com/@iasdelhi" target="_blank"
              class="bg-red-600 hover:bg-red-700 text-white px-6 py-2.5 rounded-lg font-bold text-xs uppercase tracking-wider transition shadow-lg flex items-center gap-2 cursor-pointer">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              Subscribe Now
            </a>
          </div>

          <!-- Strategy Videos -->
          <div class="space-y-6">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider">
              🎬 Strategy Sessions
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div v-for="video in videos" :key="video.name"
                class="bg-neutral-950 border border-neutral-850 rounded-xl overflow-hidden hover:border-neutral-750 transition">
                <div class="bg-neutral-900 p-5 flex flex-col gap-3">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-red-600/20 flex items-center justify-center flex-shrink-0">
                      <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    <div>
                      <h4 class="font-bold text-white text-sm">{{ video.name }}</h4>
                      <p class="text-[10px] text-gray-500 uppercase tracking-wider">{{ video.title }}</p>
                    </div>
                  </div>
                  <p class="text-xs text-gray-400 leading-relaxed">{{ video.description }}</p>
                  <a :href="video.link" target="_blank"
                    class="text-[#ffd504] text-xs font-bold uppercase tracking-wider hover:underline">
                    Watch Video →
                  </a>
                </div>
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
import imgYouTube from '../assets/images/misc/youtube_channel.jpg';

const videos = [
  {
    name: 'Amit Kale',
    title: 'IAS 2019 — Prelims Test Discussion',
    description: 'Detailed discussion on Prelims test-taking strategies and common pitfalls to avoid.',
    link: 'https://www.youtube.com/@iasdelhi'
  },
  {
    name: 'Dr. Akshita Gupta',
    title: 'AIR 69 — Medical Science Strategy',
    description: 'Comprehensive Medical Science optional preparation strategy and book recommendations.',
    link: 'https://www.youtube.com/@iasdelhi'
  },
  {
    name: 'Girish Kalagonda',
    title: 'AIR 307 — PSIR Strategy',
    description: 'PSIR optional subject strategy covering answer writing techniques and key topics.',
    link: 'https://www.youtube.com/@iasdelhi'
  },
  {
    name: 'Yogesh Patil',
    title: 'AIR 63 — Anthropology Strategy',
    description: 'Anthropology optional preparation approach with day-wise planning tips.',
    link: 'https://www.youtube.com/@iasdelhi'
  }
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
