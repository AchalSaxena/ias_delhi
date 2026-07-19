<template>
  <div>
    <!-- Header Hero Banner (Clean Dark Theme) -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Anthropology Optional</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Exhaustive guidance and evaluation by experienced UPSC faculties to help you score 300+ marks.
        </p>
      </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container mx-auto px-4 py-10 max-w-7xl">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <!-- Sticky Sidebar Navigation (Left Column) -->
        <ServiceSidebar activeItem="Anthropology Optional" />

        <!-- Main Content Area (Right Column) -->
        <main class="lg:col-span-3 space-y-12">
          
          <!-- Tab Navigation for Programs -->
          <div class="flex border-b border-neutral-800">
            <button 
              @click="activeTab = 'focus'"
              class="px-6 py-3.5 font-bold uppercase tracking-wider text-xs md:text-sm border-b-2 transition focus:outline-none cursor-pointer"
              :class="activeTab === 'focus' ? 'border-[#ffd504] text-white font-black' : 'border-transparent text-gray-400 hover:text-gray-200'"
            >
              Daily PYQ Writing Focus Group
            </button>
            <button 
              @click="activeTab = 'test-series'"
              class="px-6 py-3.5 font-bold uppercase tracking-wider text-xs md:text-sm border-b-2 transition focus:outline-none cursor-pointer"
              :class="activeTab === 'test-series' ? 'border-[#ffd504] text-white font-black' : 'border-transparent text-gray-400 hover:text-gray-200'"
            >
              Test Series
            </button>
          </div>

          <!-- TAB 1: Focus Group Details -->
          <div v-if="activeTab === 'focus'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">
                Anthropology Daily PYQ Writing Focus Group (2 Months)
              </h2>
              <div class="flex flex-wrap items-center gap-3.5 text-xs font-bold mt-2">
                <span class="bg-red-500/10 text-red-400 px-3 py-1 rounded border border-red-500/20 uppercase">
                  📅 Batch Starts: 6th July 2026
                </span>
                <button 
                  @click="showScheduleModal = true" 
                  class="bg-blue-600/15 text-blue-400 px-3 py-1 rounded border border-blue-500/20 hover:bg-blue-600/25 transition uppercase cursor-pointer"
                >
                  📄 View Study Schedule
                </button>
              </div>
            </div>

            <!-- Experienced Faculty Image Banner -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgBanner" alt="Anthropology Experienced Faculty - Akshay Pawar AIR 605, Rushikesh Gaikwad AIR 610" class="w-full h-auto object-contain block" />
            </div>

            <!-- Program Features -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3 flex items-center gap-2">
                📋 Key Features of the Program
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div 
                  v-for="(feature, idx) in features" 
                  :key="idx"
                  class="flex items-start gap-3 bg-neutral-900/50 p-4 rounded-xl border border-neutral-850 hover:border-neutral-750 transition"
                >
                  <span class="flex-shrink-0 w-6 h-6 rounded-full bg-amber-400/10 text-amber-400 flex items-center justify-center text-xs font-bold">
                    {{ idx + 1 }}
                  </span>
                  <p class="text-gray-300 text-xs leading-relaxed" v-html="feature"></p>
                </div>
              </div>
            </div>

            <!-- Objectives & Syllabus Flex -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Objectives -->
              <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 space-y-4">
                <h3 class="text-base font-bold text-white uppercase tracking-wider border-b border-neutral-800 pb-2.5">
                  🎯 Course Objectives
                </h3>
                <ul class="space-y-3.5">
                  <li 
                    v-for="(obj, i) in objectives" 
                    :key="i"
                    class="flex items-start gap-2.5 text-xs text-gray-300 leading-relaxed"
                  >
                    <span class="text-amber-400 mt-0.5">✓</span>
                    <span>{{ obj }}</span>
                  </li>
                </ul>
              </div>

              <!-- Syllabus Silhouette Graphic -->
              <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 flex flex-col justify-center items-center text-center">
                <img :src="imgSilhouette" alt="Anthropology optional program evolution" class="h-32 w-auto object-contain opacity-80 mb-4" />
                <h4 class="font-bold text-white text-sm uppercase tracking-wider">Comprehensive Syllabus Coverage</h4>
                <p class="text-xs text-gray-400 mt-1 max-w-xs leading-normal">
                  Detailed day-wise tracking ensures paper-I and paper-II topics are thoroughly revised.
                </p>
              </div>
            </div>

            <!-- Fee Structure -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                💵 Fee Structure
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center flex flex-col justify-between">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Only Paper-I</h4>
                  <p class="text-2xl font-black text-white">₹ 5,000</p>
                  <span class="text-[10px] text-gray-500 mt-2 block">(inclusive of all taxes)</span>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center flex flex-col justify-between">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Only Paper-II</h4>
                  <p class="text-2xl font-black text-white">₹ 5,000</p>
                  <span class="text-[10px] text-gray-500 mt-2 block">(inclusive of all taxes)</span>
                </div>
                <div class="bg-neutral-900 border border-amber-500/30 rounded-xl p-5 text-center flex flex-col justify-between relative overflow-hidden">
                  <div class="absolute top-0 right-0 bg-[#ffd504] text-black font-extrabold text-[8px] px-2.5 py-0.5 rounded-bl uppercase tracking-wide">Popular</div>
                  <h4 class="font-bold text-[#ffd504] text-xs uppercase tracking-wider mb-2">Both Paper-I & II</h4>
                  <p class="text-2xl font-black text-[#ffd504]">₹ 9,500</p>
                  <span class="text-[10px] text-gray-400 mt-2 block">(Save ₹ 500 · incl. of all taxes)</span>
                </div>
              </div>

              <!-- CTAs -->
              <div class="flex flex-wrap gap-4 pt-4 justify-center md:justify-start">
                <a 
                  href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform"
                  target="_blank"
                  class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer"
                >
                  📝 Click Here to Register &amp; Apply
                </a>
                <a 
                  href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Anthropology%20Daily%20PYQ%20Focus%20Group."
                  target="_blank"
                  class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg flex items-center gap-1.5 cursor-pointer"
                >
                  💬 Inquire via WhatsApp
                </a>
              </div>
            </div>

            <!-- Payment & Process Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Payment Info -->
              <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 space-y-4">
                <h3 class="text-base font-bold text-white uppercase tracking-wider border-b border-neutral-800 pb-2.5">
                  💳 Payment Options
                </h3>
                <div class="space-y-3.5 text-xs text-gray-300">
                  <div>
                    <p class="font-bold text-gray-400 uppercase tracking-wide text-[10px] mb-1">BHIM / Paytm / PhonePe</p>
                    <p class="font-mono text-white text-sm">9555098967 / 9284142050</p>
                  </div>
                  <div>
                    <p class="font-bold text-gray-400 uppercase tracking-wide text-[10px] mb-1">Google Pay UPI</p>
                    <p class="font-mono text-white text-sm">9555098967 / iasdelhi.org-2@oksbi</p>
                  </div>
                  <div>
                    <p class="font-bold text-gray-400 uppercase tracking-wide text-[10px] mb-1">Bank Account Transfer</p>
                    <p class="leading-normal">
                      <strong>Name:</strong> UNIAID EDUCATION SERVICES LLP<br>
                      <strong>Account No.:</strong> 38950544288<br>
                      <strong>IFSC Code:</strong> SBIN0016203<br>
                      <strong>Branch:</strong> Old Rajinder Nagar, New Delhi
                    </p>
                  </div>
                </div>
              </div>

              <!-- Steps to Join -->
              <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 space-y-4">
                <h3 class="text-base font-bold text-white uppercase tracking-wider border-b border-neutral-800 pb-2.5">
                  👣 3-Step Enrollment Process
                </h3>
                <div class="space-y-4">
                  <div class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-amber-400 text-black flex items-center justify-center font-bold text-xs flex-shrink-0">1</span>
                    <p class="text-xs text-gray-300 leading-normal">
                      Make the payment of fees using any of the online payment modes listed on the left.
                    </p>
                  </div>
                  <div class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-amber-400 text-black flex items-center justify-center font-bold text-xs flex-shrink-0">2</span>
                    <p class="text-xs text-gray-300 leading-normal">
                      Save the receipt or note down the Transaction ID generated after successful payment.
                    </p>
                  </div>
                  <div class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-amber-400 text-black flex items-center justify-center font-bold text-xs flex-shrink-0">3</span>
                    <p class="text-xs text-gray-300 leading-normal">
                      Fill out the admission form, input the Transaction ID, and submit it to complete registration.
                    </p>
                  </div>
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
                <a href="tel:7678249423" class="hover:text-amber-400 transition bg-neutral-900 px-4.5 py-2.5 rounded border border-neutral-800">
                  Adesh sir: 7678249423
                </a>
                <a href="tel:8527965204" class="hover:text-amber-400 transition bg-neutral-900 px-4.5 py-2.5 rounded border border-neutral-800">
                  Gajanan sir: 8527965204
                </a>
              </div>
            </div>
          </div>

          <!-- TAB 2: Test Series Details -->
          <div v-else-if="activeTab === 'test-series'" class="space-y-10">
            <div>
              <h2 class="text-2xl font-black text-white uppercase tracking-wider mb-2">
                Anthropology Optional Test Series
              </h2>
              <div class="flex flex-wrap items-center gap-3.5 text-xs font-bold mt-2">
                <span class="bg-red-500/10 text-red-400 px-3 py-1 rounded border border-red-500/20 uppercase">
                  📅 New Batch: 6th July 2026
                </span>
                <button 
                  @click="showScheduleModal = true" 
                  class="bg-blue-600/15 text-blue-400 px-3 py-1 rounded border border-blue-500/20 hover:bg-blue-600/25 transition uppercase cursor-pointer"
                >
                  📄 View Day-wise Schedule
                </button>
              </div>
            </div>

            <!-- Experienced Faculty Image Banner -->
            <div class="rounded-xl overflow-hidden border border-neutral-800 shadow-2xl bg-neutral-950">
              <img :src="imgBanner" alt="Anthropology Experienced Faculty - Akshay Pawar AIR 605, Rushikesh Gaikwad AIR 610" class="w-full h-auto object-contain block" />
            </div>

            <!-- Description -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 space-y-4">
              <h3 class="text-base font-bold text-white uppercase tracking-wider border-b border-neutral-800 pb-2.5 flex items-center gap-2">
                💡 Test Series Highlights
              </h3>
              <p class="text-xs text-gray-300 leading-relaxed">
                The Anthropology Optional Test Series is carefully designed to build exam-temperament and precision in answer writing. Under the guidance of experienced faculties, candidates will receive granular feedback and model answers to maximize scores.
              </p>
              <ul class="space-y-2.5 text-xs text-gray-400 pl-2">
                <li class="flex items-center gap-2">
                  <span class="text-green-500">✓</span> High-quality evaluation strictly as per UPSC parameters
                </li>
                <li class="flex items-center gap-2">
                  <span class="text-green-500">✓</span> Personal call feedback and interactive doubt resolution
                </li>
                <li class="flex items-center gap-2">
                  <span class="text-green-500">✓</span> Model answers provided for all test questions
                </li>
              </ul>
            </div>

            <!-- Fee Structure -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-8 space-y-6">
              <h3 class="text-lg font-bold text-[#ffd504] uppercase tracking-wider border-b border-neutral-800 pb-3">
                💵 Fee Structure
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center flex flex-col justify-between">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Only Paper-I</h4>
                  <p class="text-2xl font-black text-white">₹ 5,000</p>
                  <span class="text-[10px] text-gray-500 mt-2 block">(inclusive of all taxes)</span>
                </div>
                <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-5 text-center flex flex-col justify-between">
                  <h4 class="font-bold text-gray-300 text-xs uppercase tracking-wider mb-2">Only Paper-II</h4>
                  <p class="text-2xl font-black text-white">₹ 5,000</p>
                  <span class="text-[10px] text-gray-500 mt-2 block">(inclusive of all taxes)</span>
                </div>
                <div class="bg-neutral-900 border border-amber-500/30 rounded-xl p-5 text-center flex flex-col justify-between relative overflow-hidden">
                  <div class="absolute top-0 right-0 bg-[#ffd504] text-black font-extrabold text-[8px] px-2.5 py-0.5 rounded-bl uppercase tracking-wide">Popular</div>
                  <h4 class="font-bold text-[#ffd504] text-xs uppercase tracking-wider mb-2">Both Paper-I & II</h4>
                  <p class="text-2xl font-black text-[#ffd504]">₹ 9,500</p>
                  <span class="text-[10px] text-gray-400 mt-2 block">(Save ₹ 500 · incl. of all taxes)</span>
                </div>
              </div>

              <!-- CTAs -->
              <div class="flex flex-wrap gap-4 pt-4 justify-center md:justify-start">
                <a 
                  href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform"
                  target="_blank"
                  class="bg-[#ffd504] text-black px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs hover:bg-[#ffcc00] transition shadow-lg cursor-pointer"
                >
                  📝 Click Here to Register &amp; Apply
                </a>
                <a 
                  href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20enroll%20in%20Anthropology%20Test%20Series."
                  target="_blank"
                  class="bg-green-600 text-white px-7 py-3 rounded-lg font-black uppercase tracking-wider text-xs transition shadow-lg flex items-center gap-1.5 cursor-pointer"
                >
                  💬 Inquire via WhatsApp
                </a>
              </div>
            </div>

            <!-- Coordinator Support -->
            <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 flex flex-col md:flex-row justify-between items-center gap-4">
              <div>
                <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">📞 Program Advisors</h4>
                <p class="text-xs text-gray-400">Direct query resolution and test schedule coordination.</p>
              </div>
              <div class="flex flex-wrap gap-4 text-xs font-mono font-bold text-white">
                <a href="tel:7678249423" class="hover:text-amber-400 transition bg-neutral-900 px-4.5 py-2.5 rounded border border-neutral-800">
                  Adesh sir: 7678249423
                </a>
                <a href="tel:8527965204" class="hover:text-amber-400 transition bg-neutral-900 px-4.5 py-2.5 rounded border border-neutral-800">
                  Gajanan sir: 8527965204
                </a>
              </div>
            </div>
          </div>

        </main>
      </div>
    </div>

    <!-- DAY-WISE STUDY SCHEDULE INTERACTIVE MODAL -->
    <transition name="fade">
      <div 
        v-if="showScheduleModal" 
        class="fixed inset-0 z-50 bg-black/80 flex items-center justify-center p-4 backdrop-blur-sm"
      >
        <div class="bg-neutral-950 border border-neutral-850 rounded-2xl max-w-3xl w-full max-h-[85vh] flex flex-col overflow-hidden shadow-2xl">
          <!-- Modal Header -->
          <div class="bg-neutral-900 border-b border-neutral-850 px-6 py-4 flex justify-between items-center">
            <div>
              <h3 class="text-sm font-black text-[#ffd504] uppercase tracking-wider">Day-Wise Study Schedule</h3>
              <p class="text-[10px] text-gray-400 uppercase tracking-wide mt-0.5">Anthropology Paper I &amp; II Daily Targets</p>
            </div>
            <button 
              @click="showScheduleModal = false"
              class="text-gray-400 hover:text-white text-xl focus:outline-none w-8 h-8 rounded-full hover:bg-neutral-800 flex items-center justify-center cursor-pointer"
            >
              ✕
            </button>
          </div>

          <!-- Modal Body (Scrollable Schedule Content) -->
          <div class="p-6 overflow-y-auto space-y-4">
            <p class="text-xs text-gray-300 leading-normal">
              Below is a sample day-wise target outline (Syllabus Paper I &amp; II) mapped to only <strong>4 hours</strong> of daily study:
            </p>
            <div class="border border-neutral-850 rounded-xl overflow-hidden text-xs">
              <div class="grid grid-cols-5 bg-neutral-900 py-3.5 border-b border-neutral-850 text-gray-400 font-bold uppercase tracking-wider text-center">
                <span class="col-span-1">Days</span>
                <span class="col-span-2">Paper-I (General/Physical)</span>
                <span class="col-span-2">Paper-II (Indian/Tribal)</span>
              </div>
              <div class="divide-y divide-neutral-900 text-gray-300">
                <div class="grid grid-cols-5 py-3 text-center items-center hover:bg-neutral-900/30 transition">
                  <span class="col-span-1 font-bold text-amber-400">1 - 10</span>
                  <span class="col-span-2 border-r border-neutral-900 px-3">Meaning, scope, and development of Anthropology; branches of Anthropology.</span>
                  <span class="col-span-2 px-3">Evolution of Indian culture; Palaeolithic, Mesolithic, Neolithic cultures.</span>
                </div>
                <div class="grid grid-cols-5 py-3 text-center items-center hover:bg-neutral-900/30 transition">
                  <span class="col-span-1 font-bold text-amber-400">11 - 20</span>
                  <span class="col-span-2 border-r border-neutral-900 px-3">Human evolution, Primates, and theories of evolution.</span>
                  <span class="col-span-2 px-3">Caste system, varna, purushartha, and sacred complex.</span>
                </div>
                <div class="grid grid-cols-5 py-3 text-center items-center hover:bg-neutral-900/30 transition">
                  <span class="col-span-1 font-bold text-amber-400">21 - 35</span>
                  <span class="col-span-2 border-r border-neutral-900 px-3">Marriage, family, kinship, economic and political organizations.</span>
                  <span class="col-span-2 px-3">Tribal situation in India; classification, issues, and administration.</span>
                </div>
                <div class="grid grid-cols-5 py-3 text-center items-center hover:bg-neutral-900/30 transition">
                  <span class="col-span-1 font-bold text-amber-400">36 - 48</span>
                  <span class="col-span-2 border-r border-neutral-900 px-3">Genetic, physiological, and medical Anthropology aspects.</span>
                  <span class="col-span-2 px-3">Problems of tribal communities; land alienation, poverty, education.</span>
                </div>
                <div class="grid grid-cols-5 py-3 text-center items-center hover:bg-neutral-900/30 transition">
                  <span class="col-span-1 font-bold text-amber-400">49 - 54</span>
                  <span class="col-span-2 border-r border-neutral-900 px-3">Full-length Mock Paper I Evaluation.</span>
                  <span class="col-span-2 px-3">Full-length Mock Paper II Evaluation &amp; feedback.</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Footer -->
          <div class="bg-neutral-900 border-t border-neutral-850 px-6 py-4.5 flex justify-end">
            <button 
              @click="showScheduleModal = false"
              class="bg-neutral-850 hover:bg-neutral-800 border border-neutral-700 text-white px-5 py-2.5 rounded-lg text-xs font-bold uppercase tracking-wider cursor-pointer"
            >
              Close Schedule
            </button>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import ServiceSidebar from '../components/ServiceSidebar.vue';

// Assets Imports
import imgBanner from '../assets/images/misc/y.png';
import imgSilhouette from '../assets/images/misc/Anthropology-optional-program.jpg';

const activeTab = ref('focus');
const showScheduleModal = ref(false);

const objectives = [
  'Help students to get 300+ marks in Anthropology optional.',
  'Get the confidence and lead in Mains preparation.',
  'Answer writing practice on a daily basis.',
  'Help students in notes making and revising Anthropology study material.'
];

const features = [
  'The program will be conducted online.',
  'Program Duration: <strong>54 days</strong>.',
  'Additionally, <strong>two full-length comprehensive papers</strong>, each for Paper-I and Paper-II, will be conducted.',
  'The course is suitable for <strong>UPSC CSE 2026</strong> students.',
  'The mentor/faculty will make an <strong>introductory call</strong> to each candidate separately at the beginning of the course.',
  'Students will get <strong>daily study targets</strong> of specific topics as per the day-wise timetable.',
  'These daily targets need <strong>only 4 hours</strong> for Anthropology study. That means GS-related preparation won\'t be affected.',
  'Based on daily study targets, students will receive <strong>daily two questions</strong> (10M/15M/20M) in the evening.',
  'The student needs to <strong>write the answers</strong> to the given questions and upload them in the folder specially created by the student\'s name.',
  '<strong>Model Approach Answers</strong> will be provided for each question.',
  'Students who opted for the <strong>offline mode</strong> just need to submit their answer sheets at the offline center in New Delhi.',
  'Students who opted for the <strong>online mode</strong> need to write answers in an offline mode only. After attempting questions, scan the answers using a mobile app and send us for evaluation and feedback.',
  'Submitted answers will be evaluated by the <strong>faculty himself</strong> and feedback will be provided on a <strong>daily basis</strong>.',
  'Every week mentor will contact each candidate separately to <strong>discuss study performance</strong>.',
  'Students can <strong>resolve their doubts</strong> related to Anthropology optional directly with mentors.',
  'A <strong>Private Telegram Group</strong> will be created for candidates where they can remain always in touch with the faculty.',
  '<strong>Only 20 students</strong> will be admitted to the course to ensure quality evaluation, feedback, and personal attention.',
  'This mentoring program is <strong>so flexible</strong> that students can start with either the Paper-I syllabus or the paper-II syllabus as per choice.'
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

.border-neutral-850 {
  border-color: #262626;
}

.bg-neutral-850 {
  background-color: #262626;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Modal fade transition */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
