<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Student Rooms Directory</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Find accommodation, PG flats, and rooms near Old Rajinder Nagar, Delhi — the UPSC hub.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="Student Rooms Directory" />

        <main class="lg:col-span-3 space-y-10">

          <!-- Banner Image -->
          <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
            <img :src="imgRooms" alt="MH Rooms in Delhi UPSC" class="w-full h-auto object-contain block" />
          </div>

          <!-- Telegram Channel -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              📱 Telegram Channels for Accommodation
            </h3>
            <p class="text-xs text-gray-300 leading-relaxed">
              Join the following Telegram channels to find rooms, PG flats, and accommodation options in Old Rajinder Nagar, Delhi. 
              These channels are managed independently and are popular among UPSC aspirants.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <a href="https://t.me/MH_Rooms_Delhi" target="_blank"
                class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center hover:border-amber-500/30 transition flex flex-col items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center">
                  <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a11.955 11.955 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.042-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.365-1.371.155-.479-.148-1.21-.462-1.805-.668-.725-.24-1.305-.589-1.25-.96.013-.087.147-.176.38-.287 1.468-.697 5.61-2.174 7.322-2.965.652-.419 1.23-.609 1.729-.609z"/></svg>
                </div>
                <div>
                  <h4 class="font-bold text-white text-sm">@MH_Rooms_Delhi</h4>
                  <p class="text-[10px] text-gray-500 mt-1">Join for room listings</p>
                </div>
              </a>
              <a href="https://t.me/MH_Rooms_Delhi2" target="_blank"
                class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center hover:border-amber-500/30 transition flex flex-col items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center">
                  <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a11.955 11.955 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.042-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.365-1.371.155-.479-.148-1.21-.462-1.805-.668-.725-.24-1.305-.589-1.25-.96.013-.087.147-.176.38-.287 1.468-.697 5.61-2.174 7.322-2.965.652-.419 1.23-.609 1.729-.609z"/></svg>
                </div>
                <div>
                  <h4 class="font-bold text-white text-sm">@MH_Rooms_Delhi2</h4>
                  <p class="text-[10px] text-gray-500 mt-1">Additional listings channel</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Location Info -->
          <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-4">
            <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
              📍 About Old Rajinder Nagar
            </h3>
            <ul class="space-y-3 text-xs text-gray-300">
              <li class="flex items-start gap-2.5">
                <span class="text-amber-400 mt-0.5">✓</span>
                <span>Old Rajinder Nagar is the heart of UPSC preparation in Delhi, with hundreds of coaching institutes and libraries.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-amber-400 mt-0.5">✓</span>
                <span>Walking distance from IDI's offline center — convenient for students enrolled in offline programs.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-amber-400 mt-0.5">✓</span>
                <span>Well-connected by metro (Rajendra Place / Karol Bagh) and bus routes.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-amber-400 mt-0.5">✓</span>
                <span>Wide range of PG accommodations, shared rooms, and single rooms available at various price points.</span>
              </li>
            </ul>
          </div>

        </main>
      </div>
    </div>
  </div>
</template>

<script setup>
import ServiceSidebar from '../components/ServiceSidebar.vue';
import imgRooms from '../assets/images/misc/mh_rooms_in_delhi_upsc.jpg';
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
