<template>
  <div>
    <!-- Hero Banner -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Toppers' Testimonials</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Hear from our successful candidates who cracked the UPSC Civil Services Examination with IDI's guidance.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <ServiceSidebar activeItem="Toppers' Testimonials" />

        <main class="lg:col-span-3 space-y-10">

          <!-- Banner Image -->
          <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
            <img :src="imgTestimonials" alt="Toppers Testimonials" class="w-full h-auto object-contain block" />
          </div>

          <!-- Testimonial Cards -->
          <div class="space-y-6">
            <div v-for="(testimonial, i) in testimonials" :key="i"
              class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-3 hover:border-neutral-750 transition">
              <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 rounded-full bg-amber-400/10 flex items-center justify-center flex-shrink-0">
                  <span class="text-amber-400 font-bold text-sm">{{ testimonial.initials }}</span>
                </div>
                <div>
                  <h4 class="font-bold text-white text-sm">{{ testimonial.name }}</h4>
                  <p class="text-[10px] text-gray-500 uppercase tracking-wider">{{ testimonial.title }}</p>
                </div>
              </div>
              <p class="text-xs text-gray-300 leading-relaxed italic">
                "{{ testimonial.quote }}"
              </p>
            </div>
          </div>

        </main>
      </div>
    </div>
  </div>
</template>

<script setup>
import ServiceSidebar from '../components/ServiceSidebar.vue';
import imgTestimonials from '../assets/images/misc/toppers__testimonials.png';

const testimonials = [
  {
    name: 'Dr. Aaditya Sharma',
    initials: 'AS',
    title: 'IAS Officer',
    quote: 'The mentorship at IDI was instrumental in shaping my preparation strategy. The structured approach to answer writing and personalized feedback helped me secure a top rank.'
  },
  {
    name: 'Dr. Danish Rabbani Khan',
    initials: 'DK',
    title: 'UPSC Qualifier',
    quote: 'IDI provided the perfect blend of academic rigor and personal guidance. The faculty\'s commitment to each student\'s success is truly remarkable.'
  },
  {
    name: 'Apoorv Balpande',
    initials: 'AB',
    title: 'IPS Officer',
    quote: 'The daily answer writing practice and test series at IDI built my confidence and sharpened my analytical skills needed for the civil services examination.'
  },
  {
    name: 'Dr. Rekha Meena',
    initials: 'RM',
    title: 'IPS Officer',
    quote: 'The structured mentorship program and regular evaluation helped me identify my weak areas early and work on them systematically.'
  },
  {
    name: 'Aswathy Srinivas',
    initials: 'AS',
    title: 'IAS AIR 40',
    quote: 'IDI\'s Medical Science test series and mentorship program gave me the edge I needed. The toppers\' guidance sessions were incredibly insightful.'
  },
  {
    name: 'Yogesh Patil',
    initials: 'YP',
    title: 'IAS AIR 231',
    quote: 'The Anthropology optional mentorship at IDI was exceptional. The daily targets and faculty feedback ensured consistent progress throughout my preparation.'
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
