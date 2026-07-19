<template>
  <div class="min-h-screen bg-[#07090e] text-white">
    <div v-if="loading" class="text-center py-24 text-gray-400">Loading course syllabus...</div>
    
    <template v-else-if="course">
      <!-- Full-bleed Library Banner Header -->
      <section class="relative w-full py-16 md:py-24 border-b border-neutral-900 overflow-hidden">
        <!-- Background Image with Dark Gradient Overlay -->
        <div class="absolute inset-0 z-0">
          <img :src="libraryBg" alt="Academic Library Background" class="w-full h-full object-cover opacity-35" />
          <div class="absolute inset-0 bg-gradient-to-t from-[#07090e] via-transparent to-black/80"></div>
        </div>
        
        <!-- Banner Content -->
        <div class="container mx-auto px-4 relative z-10">
          <span class="inline-block bg-[#d97706]/20 border border-[#d97706]/40 text-[#ffd504] text-[10px] font-black tracking-widest uppercase px-3 py-1 rounded-full mb-4">
            ELITE FOUNDATION PROGRAM
          </span>
          <h1 class="text-3xl md:text-5xl font-black mb-6 tracking-wide drop-shadow-md max-w-4xl text-white">
            {{ course.name }}
          </h1>
          
          <!-- Metadata Row -->
          <div class="flex flex-wrap items-center gap-6 text-sm text-gray-300">
            <div class="flex items-center gap-2">
              <span class="w-8 h-8 rounded-full bg-neutral-800/80 flex items-center justify-center text-xs">👤</span>
              <div>
                <p class="text-[10px] text-gray-450 font-bold uppercase tracking-wider leading-none">Instructor</p>
                <p class="font-bold text-white mt-1">{{ course.instructor }}</p>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <span class="w-8 h-8 rounded-full bg-neutral-800/80 flex items-center justify-center text-xs">⏱️</span>
              <div>
                <p class="text-[10px] text-gray-450 font-bold uppercase tracking-wider leading-none">Duration</p>
                <p class="font-bold text-white mt-1">{{ course.duration_hours }} Months</p>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <span class="w-8 h-8 rounded-full bg-neutral-800/80 flex items-center justify-center text-xs">📊</span>
              <div>
                <p class="text-[10px] text-gray-450 font-bold uppercase tracking-wider leading-none">Difficulty</p>
                <p class="font-bold text-white mt-1">{{ course.level }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Main Layout Details -->
      <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
          
          <!-- Left Column: Syllabus & About -->
          <div class="lg:col-span-2 space-y-10">
            
            <!-- About Card -->
            <div class="bg-[#0e111a] border border-[#1e2538] rounded-2xl p-8 shadow-sm">
              <h2 class="text-2xl font-extrabold text-white mb-4">About This Course</h2>
              <p class="text-gray-300 text-sm leading-relaxed mb-4">
                Our flagship {{ course.name }} is meticulously designed for serious aspirants aiming to crack the Civil Services Examination. This program bridges the gap between basic concepts and advanced application-based learning required for the UPSC environment.
              </p>
              <p class="text-gray-300 text-sm leading-relaxed">
                Guided by industry veterans and former bureaucrats, the course covers every nuance of the syllabus—from static General Studies to evolving Current Affairs. We focus on building a robust analytical framework, enabling students to tackle complex mains questions and high-pressure interview scenarios with confidence and intellectual depth.
              </p>
            </div>

            <!-- Syllabus Accordion -->
            <div>
              <h2 class="text-2xl font-extrabold text-white mb-6">Syllabus Outline</h2>
              <div class="space-y-4">
                <!-- Accordion 1 -->
                <div class="border border-[#1e2538] rounded-2xl overflow-hidden bg-[#0e111a]">
                  <button 
                    @click="activeAccordion = activeAccordion === 1 ? 0 : 1"
                    class="w-full flex justify-between items-center p-5 text-left font-bold text-sm text-white focus:outline-none cursor-pointer"
                  >
                    <span>{{ getSyllabus[0].title }}</span>
                    <span class="text-xs transition-transform duration-200" :class="{ 'rotate-180': activeAccordion === 1 }">▼</span>
                  </button>
                  <div v-show="activeAccordion === 1" class="px-5 pb-5 border-t border-[#1e2538] pt-4 bg-[#090b10]">
                    <ul class="space-y-2.5 text-xs text-gray-300">
                      <li v-for="bullet in getSyllabus[0].bullets" :key="bullet" class="flex items-start gap-2">
                        <span class="text-[#ffd504]">•</span>
                        <span>{{ bullet }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
                
                <!-- Accordion 2 -->
                <div class="border border-[#1e2538] rounded-2xl overflow-hidden bg-[#0e111a]">
                  <button 
                    @click="activeAccordion = activeAccordion === 2 ? 0 : 2"
                    class="w-full flex justify-between items-center p-5 text-left font-bold text-sm text-white focus:outline-none cursor-pointer"
                  >
                    <span>{{ getSyllabus[1].title }}</span>
                    <span class="text-xs transition-transform duration-200" :class="{ 'rotate-180': activeAccordion === 2 }">▼</span>
                  </button>
                  <div v-show="activeAccordion === 2" class="px-5 pb-5 border-t border-[#1e2538] pt-4 bg-[#090b10]">
                    <ul class="space-y-2.5 text-xs text-gray-300">
                      <li v-for="bullet in getSyllabus[1].bullets" :key="bullet" class="flex items-start gap-2">
                        <span class="text-[#ffd504]">•</span>
                        <span>{{ bullet }}</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Accordion 3 -->
                <div class="border border-[#1e2538] rounded-2xl overflow-hidden bg-[#0e111a]">
                  <button 
                    @click="activeAccordion = activeAccordion === 3 ? 0 : 3"
                    class="w-full flex justify-between items-center p-5 text-left font-bold text-sm text-white focus:outline-none cursor-pointer"
                  >
                    <span>{{ getSyllabus[2].title }}</span>
                    <span class="text-xs transition-transform duration-200" :class="{ 'rotate-180': activeAccordion === 3 }">▼</span>
                  </button>
                  <div v-show="activeAccordion === 3" class="px-5 pb-5 border-t border-[#1e2538] pt-4 bg-[#090b10]">
                    <ul class="space-y-2.5 text-xs text-gray-300">
                      <li v-for="bullet in getSyllabus[2].bullets" :key="bullet" class="flex items-start gap-2">
                        <span class="text-[#ffd504]">•</span>
                        <span>{{ bullet }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Student Reviews -->
            <div>
              <h2 class="text-2xl font-extrabold text-white mb-6">Student Reviews</h2>
              <div class="space-y-4">
                <div 
                  v-for="review in fallbackReviews" 
                  :key="review.student_name"
                  class="bg-[#0e111a] border border-[#1e2538] rounded-2xl p-6 flex items-start gap-4 shadow-sm"
                >
                  <div class="w-12 h-12 rounded-full bg-[#3B82F6]/20 border border-[#3b82f6]/40 flex items-center justify-center font-bold text-sm text-[#ffd504] flex-shrink-0 select-none">
                    {{ review.student_name.charAt(0) }}
                  </div>
                  <div class="flex-grow">
                    <div class="flex justify-between items-center mb-2">
                      <h4 class="font-bold text-sm text-white">{{ review.student_name }}</h4>
                      <div class="flex gap-0.5 text-sm text-[#ffd504]">
                        <span v-for="star in 5" :key="star">★</span>
                      </div>
                    </div>
                    <p class="text-xs text-gray-400 leading-relaxed italic">"{{ review.review_text }}"</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Right Column: Form Sidebar -->
          <div>
            <div class="sticky top-24 bg-[#0e111a] border-2 border-[#d97706]/60 rounded-2xl p-8 shadow-2xl">
              <h3 class="text-xl font-black text-white mb-6">Interested in this course?</h3>
              
              <form @submit.prevent="submitInquiry" class="space-y-5">
                <!-- Full Name -->
                <div>
                  <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1.5">Full Name</label>
                  <input 
                    v-model="inquiryForm.name"
                    type="text" 
                    placeholder="Enter your name" 
                    required
                    class="w-full bg-[#07090e] border border-[#1e2538] rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary"
                  />
                </div>

                <!-- Email Address -->
                <div>
                  <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1.5">Email Address</label>
                  <input 
                    v-model="inquiryForm.email"
                    type="email" 
                    placeholder="example@email.com" 
                    required
                    class="w-full bg-[#07090e] border border-[#1e2538] rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary"
                  />
                </div>

                <!-- Mobile Number -->
                <div>
                  <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1.5">Mobile Number</label>
                  <input 
                    v-model="inquiryForm.phone"
                    type="tel" 
                    placeholder="+91 00000 00000" 
                    required
                    class="w-full bg-[#07090e] border border-[#1e2538] rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary"
                  />
                </div>

                <!-- Program Format -->
                <div>
                  <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1.5">Program Format</label>
                  <select 
                    v-model="inquiryForm.format"
                    class="w-full bg-[#07090e] border border-[#1e2538] rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary"
                  >
                    <option value="Online Live Batch">Online Live Batch</option>
                    <option value="Offline Classroom">Offline Classroom</option>
                    <option value="Hybrid Mentoring">Hybrid Mentoring</option>
                  </select>
                </div>

                <!-- Submit Button -->
                <button 
                  type="submit" 
                  :disabled="submitting"
                  class="w-full bg-[#d97706] hover:bg-[#b45309] text-white py-3 rounded-full hover:scale-[1.02] transition font-black tracking-wider uppercase flex items-center justify-center gap-1.5 text-xs shadow-md cursor-pointer disabled:opacity-50"
                >
                  {{ submitting ? 'Sending...' : 'Send Inquiry' }} <span>▷</span>
                </button>
              </form>

              <!-- Alerts -->
              <div v-if="successMsg" class="mt-4 bg-green-900/30 border border-green-700/50 text-green-300 p-3 rounded-lg text-xs text-center">
                {{ successMsg }}
              </div>
              <div v-if="errorMsg" class="mt-4 bg-red-900/30 border border-red-700/50 text-red-300 p-3 rounded-lg text-xs text-center">
                {{ errorMsg }}
              </div>

              <p class="text-center text-xs text-gray-400 mt-6">
                Prefer a call? <a href="tel:9555098967" class="text-[#ffd504] underline hover:text-[#ffd504]/80">Contact Advisor</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </template>
  </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue';
import { useRoute } from 'vue-router';
import { useCourseStore } from '../stores/courseStore';
import axios from 'axios';

// Assets
import libraryBg from '../assets/images/banner/library_hero.png';

const route = useRoute();
const courseStore = useCourseStore();

const loading = ref(false);
const course = ref(null);
const activeAccordion = ref(1);
const submitting = ref(false);
const successMsg = ref('');
const errorMsg = ref('');

const inquiryForm = ref({
  name: '',
  email: '',
  phone: '',
  format: 'Online Live Batch'
});

const defaultSyllabus = [
  {
    title: "GS Paper I: History, Geography & Society",
    bullets: [
      "Ancient & Medieval Indian History",
      "Modern Indian History & Freedom Struggle",
      "Physical & Human Geography of India & World",
      "Indian Society & Social Issues"
    ]
  },
  {
    title: "GS Paper II: Polity, Governance & International Relations",
    bullets: [
      "Indian Constitution & Democratic Structure",
      "Governance, Public Policies & Local Bodies",
      "Social Justice and Welfare Schemes",
      "India's Foreign Policy and Global Relations"
    ]
  },
  {
    title: "Ethics, Integrity & Essay Writing",
    bullets: [
      "Ethics and Human Interface basics",
      "Attitude, Aptitude and Foundational Values",
      "Emotional Intelligence & Case Studies",
      "Structured Essay Writing & Draft practice"
    ]
  }
];

const medicalSyllabus = [
  {
    title: "Paper I: Human Anatomy, Physiology & Biochemistry",
    bullets: [
      "Gross Anatomy, Neuroanatomy & Embryology",
      "Cardiovascular, Respiratory & Endocrine Physiology",
      "Protein Synthesis, Enzymes & Metabolic Disorders",
      "Pathology & Microbiology fundamentals"
    ]
  },
  {
    title: "Paper II: General Medicine, Pediatrics & Surgery",
    bullets: [
      "Cardiology, Infectious Diseases & Neurology cases",
      "General Surgery principles & Anaesthesiology",
      "Obstetrics & Gynaecology concepts",
      "Preventive & Social Medicine frameworks"
    ]
  },
  {
    title: "Mains Paper I & II Mock writing practice",
    bullets: [
      "Clinical and theoretical UPSC question analysis",
      "Previous 10 Years Question paper trends",
      "High-scoring diagrams, flowcharts and tables drafting",
      "Evaluation and feedback session by Medical Toppers"
    ]
  }
];

const getSyllabus = computed(() => {
  if (!course.value) return defaultSyllabus;
  if (course.value.category === 'Medical Science') {
    return medicalSyllabus;
  }
  return defaultSyllabus;
});

const fallbackReviews = [
  {
    student_name: "Priya Sharma",
    review_text: "The depth of knowledge shared by the instructor is unparalleled. This course transformed my answer-writing style within just three months."
  },
  {
    student_name: "Arjun Verma",
    review_text: "Excellent study material and personalized feedback sessions. The faculty really cares about your progress."
  }
];

onMounted(async () => {
  loading.value = true;
  try {
    const courseData = await courseStore.fetchCourseById(route.params.id);
    course.value = courseData;
  } catch (error) {
    console.error('Failed to load course details', error);
  } finally {
    loading.value = false;
  }
});

const submitInquiry = async () => {
  submitting.value = true;
  successMsg.value = '';
  errorMsg.value = '';
  try {
    const data = {
      name: inquiryForm.value.name,
      email: inquiryForm.value.email,
      phone: inquiryForm.value.phone,
      course_id: course.value.id,
      message: `Inquiry for format: ${inquiryForm.value.format}. Requested from the course page.`
    };
    await axios.post('/api/inquiries', data);
    successMsg.value = "Inquiry sent successfully! Our advisor will call you shortly.";
    inquiryForm.value = {
      name: '',
      email: '',
      phone: '',
      format: 'Online Live Batch'
    };
  } catch (err) {
    errorMsg.value = "Failed to submit inquiry. Please try again or call us directly.";
  } finally {
    submitting.value = false;
  }
};
</script>

<style scoped>
.focus\:border-primary:focus {
  border-color: #3b82f6;
}
</style>
