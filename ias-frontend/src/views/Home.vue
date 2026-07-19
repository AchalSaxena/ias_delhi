<template>
  <div>
    <!-- Top Split-Pane Banner Slider Section (Drishti IAS Style) -->
    <section class="w-full bg-[#f3f4f6] dark:bg-neutral-950 p-4 border-b border-gray-200 dark:border-neutral-900">
      <div class="container mx-auto grid grid-cols-1 lg:grid-cols-10 gap-4">
        
        <!-- Left Pane: Booklet promo block (3/10 width) -->
        <div class="lg:col-span-3 bg-gradient-to-br from-teal-950 via-teal-900 to-emerald-950 border border-teal-800 rounded-xl p-5 text-white flex flex-col justify-between shadow-lg relative overflow-hidden group select-none min-h-[220px] lg:min-h-auto">
          <!-- Decorative overlay Grid -->
          <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#808080_1px,transparent_1px),linear-gradient(to_bottom,#808080_1px,transparent_1px)] bg-[size:14px_24px]"></div>
          
          <div class="relative z-10">
            <!-- Dotted Title Badge -->
            <div class="inline-block border border-dashed border-white/60 px-3 py-1 text-xs font-black tracking-widest text-[#ffd504] mb-3 uppercase">
              Data Set for UPSC CSE
            </div>
            <h3 class="text-base font-extrabold text-white mb-1.5 leading-snug">Comprehensive Statistics for GS Papers</h3>
            <p class="text-[11px] text-teal-300 italic mb-4 leading-normal">
              Strengthen your answers with authentic facts, reports, and indices.
            </p>
            
            <!-- Features bullet list -->
            <ul class="space-y-1.5 text-[10px] text-gray-300 font-medium">
              <li class="flex items-center gap-1.5"><span class="text-[#ffd504] text-xs">•</span> 100+ Ready-to-Use Data Points</li>
              <li class="flex items-center gap-1.5"><span class="text-[#ffd504] text-xs">•</span> Authentic Gov & International Sources</li>
              <li class="flex items-center gap-1.5"><span class="text-[#ffd504] text-xs">•</span> Value Addition for High-Quality Answers</li>
              <li class="flex items-center gap-1.5"><span class="text-[#ffd504] text-xs">•</span> Subject-wise, Quick Revision Format</li>
            </ul>
          </div>

          <!-- Red download CTA button -->
          <router-link 
            to="/study-material" 
            class="relative z-10 bg-[#800c22] hover:bg-[#9a1d34] text-white text-center py-2 rounded-lg text-xs font-black uppercase tracking-wider shadow transition mt-4 hover:scale-[1.02] block cursor-pointer"
          >
            Read / Download Now
          </router-link>
        </div>

        <!-- Right Pane: Slider container (7/10 width) -->
        <div class="lg:col-span-7 relative bg-neutral-900 border border-neutral-800 rounded-xl overflow-hidden shadow-lg group min-h-[220px] lg:min-h-[290px] flex items-center">
          <transition-group name="fade">
            <!-- Dynamic Slide 1: Essay Mains Test Series (Styled with pure CSS) -->
            <div 
              v-show="currentSlide === 0" 
              key="slide-essay"
              class="absolute inset-0 bg-gradient-to-r from-[#0d1b3e] via-[#102456] to-[#0f2d72] p-5 md:p-8 flex flex-col md:flex-row justify-between items-center text-white select-none transition-opacity duration-1000 ease-in-out"
            >
              <!-- Left Content -->
              <div class="flex-grow text-center md:text-left">
                <h2 class="text-xl md:text-3xl font-black mb-1.5 tracking-wide uppercase text-white leading-tight">
                  Essay Mains Test Series
                </h2>
                <p class="text-xs md:text-sm font-bold text-[#ffd504] uppercase tracking-wider mb-4">
                  Intense Revision 2026
                </p>
                <div class="text-[11px] md:text-xs text-gray-300 font-semibold mb-5 leading-normal">
                  <p>Online and Offline modes available</p>
                  <p class="text-white">English and Hindi Medium</p>
                </div>
                <!-- Yellow Admission Pill button -->
                <router-link 
                  to="/courses"
                  class="inline-block bg-[#ffd504] text-black px-6 py-2 rounded-full text-xs font-black uppercase tracking-wider shadow-lg hover:scale-[1.04] transition border border-[#ffd504]/20 cursor-pointer"
                >
                  Admission Open
                </router-link>
              </div>

              <!-- Accent wave curve line -->
              <div class="hidden md:block h-32 w-1.5 bg-gradient-to-b from-[#ffd504] to-[#d97706] rounded-full mx-6 opacity-30"></div>

              <!-- Right Content Details -->
              <div class="w-full md:w-64 border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0 md:pl-6 text-left flex-shrink-0 mt-4 md:mt-0">
                <p class="text-xs md:text-sm font-black text-[#ffd504] mb-2 uppercase">Package I Details:</p>
                <p class="text-sm md:text-base font-bold text-white mb-2">Total 6 Full Length Tests</p>
                <ul class="space-y-1 text-[10px] md:text-xs text-gray-300">
                  <li class="flex items-center gap-1.5">• Master Philosophical & Contemporary Essays</li>
                  <li class="flex items-center gap-1.5">• Expert Evaluation within 48h</li>
                  <li class="flex items-center gap-1.5">• High-Scoring Model Essays provided</li>
                </ul>
              </div>
            </div>

            <!-- Image Slides (topper selection banners) -->
            <img 
              v-for="(slide, index) in slides" 
              v-show="currentSlide === index + 1"
              :key="slide"
              :src="slide" 
              alt="UPSC CSE Topper Selection Banner" 
              class="absolute inset-0 w-full h-full object-contain transition-opacity duration-1000 ease-in-out select-none bg-black"
            />
          </transition-group>

          <!-- Modern Navigation Buttons -->
          <button 
            @click="prevSlide" 
            class="absolute left-3 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-black/40 hover:bg-black/75 text-white flex items-center justify-center transition-all duration-300 z-20 focus:outline-none backdrop-blur-sm border border-white/10 opacity-0 group-hover:opacity-100 shadow-md cursor-pointer hover:scale-105"
            title="Previous Selection"
          >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
          </button>
          <button 
            @click="nextSlide" 
            class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-black/40 hover:bg-black/75 text-white flex items-center justify-center transition-all duration-300 z-20 focus:outline-none backdrop-blur-sm border border-white/10 opacity-0 group-hover:opacity-100 shadow-md cursor-pointer hover:scale-105"
            title="Next Selection"
          >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
          </button>

          <!-- Progress bar -->
          <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/10 z-20 overflow-hidden">
            <div 
              class="h-full bg-[#ffd504] transition-all duration-[6000ms] ease-linear"
              :style="{ width: progressWidth + '%' }"
            ></div>
          </div>

          <!-- Pagination dots -->
          <div class="absolute bottom-3 left-0 right-0 flex justify-center gap-2 z-20">
            <button 
              v-for="idx in slides.length + 1" 
              :key="idx"
              @click="setSlide(idx - 1)"
              class="h-1.5 rounded-full transition-all duration-300 focus:outline-none cursor-pointer"
              :class="currentSlide === idx - 1 ? 'bg-[#ffd504] w-5' : 'bg-white/40 w-1.5 hover:bg-white/70'"
              :aria-label="'Go to slide ' + idx"
            ></button>
          </div>
        </div>

      </div>
    </section>

    <!-- Stats Bar -->
    <section class="bg-primary text-white py-5 shadow-md">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
          <div class="stat-item">
            <div class="text-2xl font-bold">Est. 2016</div>
            <p class="text-white/75 text-sm">Founded</p>
          </div>
          <div class="stat-item">
            <div class="text-2xl font-bold">7+ Subjects</div>
            <p class="text-white/75 text-sm">Optional & GS Programs</p>
          </div>
          <div class="stat-item">
            <div class="text-2xl font-bold">Individual</div>
            <p class="text-white/75 text-sm">Personalized Mentoring</p>
          </div>
          <div class="stat-item">
            <div class="text-2xl font-bold">ORN, Delhi</div>
            <p class="text-white/75 text-sm">Old Rajinder Nagar</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════ QUICK CATEGORIES ═══════════ -->
    <section class="quick-categories-section py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center mb-10">
          <h2 class="quick-cat-title text-3xl font-extrabold tracking-widest uppercase">Quick Categories</h2>
          <div class="quick-cat-underline mx-auto mt-2"></div>
        </div>

        <!-- 4-column grid of category cards -->
        <div class="quick-cat-grid">
          <!-- 1. Medical Science Optional Test Series -->
          <a href="/courses" class="cat-card" title="Medical Science Optional Test Series">
            <div class="cat-img-wrap">
              <img :src="imgMedSci" alt="Medical Science Optional Test Series" class="cat-img" />
            </div>
            <div class="cat-label">Medical Science<br>Optional Test Series</div>
          </a>

          <!-- 2. Daily Answer Writing: Medical Science -->
          <a href="/courses" class="cat-card" title="Daily Answer Writing: Medical Science">
            <div class="cat-img-wrap">
              <img :src="imgDoctor" alt="Daily Answer Writing Medical Science" class="cat-img" />
            </div>
            <div class="cat-label">Daily Answer Writing:<br>Medical Science</div>
          </a>

          <!-- 3. Medical Science Study Material -->
          <a href="/courses" class="cat-card" title="Medical Science Study Material">
            <div class="cat-img-wrap">
              <img :src="imgMedSciMat" alt="Medical Science Study Material" class="cat-img" />
            </div>
            <div class="cat-label">Medical Science<br>Study Material</div>
          </a>

          <!-- 4. GS Revision & Daily Answer Writing -->
          <a href="/courses" class="cat-card" title="GS Revision & Daily Answer Writing">
            <div class="cat-img-wrap">
              <img :src="imgGSRevision" alt="GS Revision and Daily Answer Writing" class="cat-img" />
            </div>
            <div class="cat-label">GS Revision &amp;<br>Daily Answer Writing</div>
          </a>

          <!-- 5. Sociology Optional Programs -->
          <a href="/courses" class="cat-card" title="Sociology Optional Programs">
            <div class="cat-img-wrap">
              <img :src="imgSociology" alt="Sociology Optional Programs" class="cat-img cat-img-portrait" />
            </div>
            <div class="cat-label">Sociology Optional<br>Programs</div>
          </a>

          <!-- 6. Public Administration Programs -->
          <a href="/courses" class="cat-card" title="Public Administration Programs">
            <div class="cat-img-wrap">
              <img :src="imgPublicAdmin" alt="Public Administration Programs" class="cat-img cat-img-portrait" />
            </div>
            <div class="cat-label">Public Administration<br>Programs</div>
          </a>

          <!-- 7. Anthropology Optional Programs -->
          <router-link to="/services/anthropology-optional-programs" class="cat-card" title="Anthropology Optional Programs">
            <div class="cat-img-wrap">
              <img :src="imgAnthropology" alt="Anthropology Optional Programs" class="cat-img" />
            </div>
            <div class="cat-label">Anthropology Optional<br>Programs</div>
          </router-link>

          <!-- 8. IDI's Selections -->
          <a href="/about" class="cat-card" title="IDI's Selections">
            <div class="cat-img-wrap">
              <img :src="imgAchievements" alt="IDI's Selections" class="cat-img" />
            </div>
            <div class="cat-label">IDI's Selections</div>
          </a>

          <!-- 9. Toppers' Answer Copies -->
          <a href="/courses" class="cat-card" title="Toppers' Answer Copies">
            <div class="cat-img-wrap">
              <img :src="imgToppers" alt="Toppers Answer Copies" class="cat-img" />
            </div>
            <div class="cat-label">Toppers'<br>Answer Copies</div>
          </a>

          <!-- 10. Toppers' Testimonials -->
          <a href="/contact" class="cat-card" title="Toppers' Testimonials">
            <div class="cat-img-wrap">
              <img :src="imgTestimonials" alt="Toppers Testimonials" class="cat-img" />
            </div>
            <div class="cat-label">Toppers'<br>Testimonials</div>
          </a>

          <!-- 11. Faculties of IAS Delhi Institute -->
          <a href="/about" class="cat-card" title="Faculties of IAS Delhi Institute">
            <div class="cat-img-wrap">
              <img :src="imgFaculties" alt="Faculties of IAS Delhi Institute" class="cat-img" />
            </div>
            <div class="cat-label">Faculties of IAS<br>Delhi Institute (IDI)</div>
          </a>

          <!-- 12. YouTube Channel -->
          <a href="https://www.youtube.com/@iasdelhi" target="_blank" class="cat-card" title="YouTube Channel">
            <div class="cat-img-wrap">
              <img :src="imgYoutube" alt="YouTube Channel" class="cat-img" />
            </div>
            <div class="cat-label">YouTube Channel</div>
          </a>

          <!-- 13. IDI Telegram Channel -->
          <a href="https://t.me/iasdelhi" target="_blank" class="cat-card" title="IDI Telegram Channel">
            <div class="cat-img-wrap">
              <img :src="imgTelegram" alt="IDI Telegram Channel" class="cat-img" />
            </div>
            <div class="cat-label">IDI Telegram Channel</div>
          </a>

          <!-- 14. IMI Rooms in Delhi UPSC -->
          <a href="https://maps.app.goo.gl/1mgFBMZ9AwxcKnUp6" target="_blank" class="cat-card" title="IMI Rooms in Delhi UPSC">
            <div class="cat-img-wrap cat-img-icon-wrap">
              <span class="cat-big-icon">🏠</span>
            </div>
            <div class="cat-label">IMI Rooms in<br>Delhi UPSC</div>
          </a>
        </div>
      </div>
    </section>
    <!-- ═════════════════════════════════════ -->



    <!-- Why Choose IDI -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold mb-3">Why Choose IDI?</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            IAS Delhi Institute (IDI) is the one-stop solution for all the academic needs of a UPSC aspirant.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="feature-card rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4">🎓</div>
            <h3 class="text-xl font-bold mb-3">Individual Mentoring</h3>
            <p class="text-gray-600">
              Each student is unique. We mentor individually through curated modules tailored to your strengths and weaknesses.
            </p>
          </div>
          <div class="feature-card rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4">👨‍🏫</div>
            <h3 class="text-xl font-bold mb-3">Expert Faculty</h3>
            <p class="text-gray-600">
              Faculties with 10+ years of UPSC experience. Answer evaluation by UPSC toppers — not inexperienced candidates.
            </p>
          </div>
          <div class="feature-card rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4">📝</div>
            <h3 class="text-xl font-bold mb-3">Daily Answer Writing</h3>
            <p class="text-gray-600">
              Timely evaluation within 24–48 hours. Flexible test options — live 1-1, comments-based, or online via Google Meet.
            </p>
          </div>
          <div class="feature-card rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4">🗂️</div>
            <h3 class="text-xl font-bold mb-3">Optional Subjects</h3>
            <p class="text-gray-600">
              Comprehensive coverage of Sociology, Anthropology, History, Public Administration, Medical Science, Political Science and more.
            </p>
          </div>
          <div class="feature-card rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4">🏆</div>
            <h3 class="text-xl font-bold mb-3">Test Series & Evaluation</h3>
            <p class="text-gray-600">
              Structured test series with topic-wise and comprehensive tests. Offline and online modes available for maximum flexibility.
            </p>
          </div>
          <div class="feature-card rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="text-4xl mb-4">📍</div>
            <h3 class="text-xl font-bold mb-3">Prime Delhi Location</h3>
            <p class="text-gray-600">
              Located in Old Rajinder Nagar (ORN), New Delhi — the hub of UPSC preparation — with both offline and online options.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Programs Section -->
    <section class="container mx-auto px-4 py-16">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-3">Our Programs</h2>
        <p class="text-gray-600">Explore IDI's comprehensive UPSC preparation programs for various optional subjects and GS</p>
      </div>
      <div v-if="loading" class="text-center py-8 text-gray-500">Loading programs...</div>
      <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <CourseCard v-for="course in featuredCourses" :key="course.id" :course="course" />
      </div>
      <div class="text-center mt-8">
        <router-link to="/courses" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition inline-block">
          View All Programs →
        </router-link>
      </div>
    </section>

    <!-- Distinguished Faculty Section -->
    <section class="bg-neutral-950 text-white py-16 border-t border-b border-neutral-900">
      <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
          <div>
            <h2 class="text-4xl font-extrabold tracking-wide text-white mb-2">Distinguished Faculty</h2>
            <p class="text-gray-400 text-sm">Learn from the minds that shape India's future bureaucracy.</p>
          </div>
          <router-link to="/about" class="text-[#ffd504] hover:underline font-semibold text-sm flex items-center gap-1 mt-4 md:mt-0 transition">
            View All Faculty
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
          </router-link>
        </div>

        <!-- Faculty Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <div v-for="member in distinguishedFaculty" :key="member.name" class="flex flex-col group cursor-pointer">
            <div class="aspect-square w-full rounded-2xl overflow-hidden mb-4 bg-neutral-900 border border-neutral-800">
              <img :src="member.image" :alt="member.name" class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />
            </div>
            <h3 class="text-xl font-bold text-white mb-1">{{ member.name }}</h3>
            <p class="text-[#ffd504] text-xs font-bold uppercase tracking-wider mb-1">{{ member.title }}</p>
            <p class="text-gray-400 text-xs">{{ member.subject }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-50 py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Student Testimonials</h2>
        <div v-if="testimonials.length === 0" class="text-center py-8 text-gray-500">
          Be the first to share your success story!
        </div>
        <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <TestimonialCard v-for="testimonial in testimonials.slice(0, 3)" :key="testimonial.id" :testimonial="testimonial" />
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-primary text-white py-12">
      <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto text-center">
          <h3 class="text-2xl font-bold mb-2">Stay Updated</h3>
          <p class="mb-6 text-white/80">Subscribe for new batch announcements, exam tips, and study material updates.</p>
          <NewsletterForm />
        </div>
      </div>
    </section>

    <!-- CTA Section with Real Contact -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Begin Your UPSC Journey?</h2>
        <p class="text-gray-600 mb-2 max-w-2xl mx-auto">
          Join IAS Delhi Institute's proven UPSC preparation programs. Contact us to find the right program for you.
        </p>
        <p class="text-gray-500 text-sm mb-8">
          📍 53/4, 1st Floor, Old Rajinder Nagar, New Delhi – 110060 &nbsp;|&nbsp; 📞 9555098967
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform"
            target="_blank"
            class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:opacity-90 transition"
          >
            Apply / Register Now
          </a>
          <router-link to="/contact" class="border-2 border-primary text-primary px-8 py-3 rounded-lg font-semibold hover:bg-primary hover:text-white transition">
            Contact Us
          </router-link>
          <a
            href="https://wa.me/919555098967?text=Hello%20IDI%2C%20I%20want%20to%20inquire%20about%20admission."
            target="_blank"
            class="bg-green-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-600 transition flex items-center gap-2"
          >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.783 1.14c-1.503.89-2.747 2.26-3.514 3.882-.768 1.622-.804 3.45-.104 5.091 1.372 3.441 4.744 5.77 8.39 5.77a9.923 9.923 0 001.289-.084c3.634-.508 6.718-3.247 7.594-6.817.876-3.57-.378-7.302-3.239-9.266a9.918 9.918 0 00-5.63-1.716zm0-2.08c5.228 0 9.468 4.239 9.468 9.467s-4.24 9.467-9.468 9.467C6.477 21.413 2.239 17.174 2.239 11.946s4.238-9.467 9.468-9.467z"/></svg>
            WhatsApp
          </a>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue';
import CourseCard from '../components/CourseCard.vue';
import TestimonialCard from '../components/TestimonialCard.vue';
import NewsletterForm from '../components/NewsletterForm.vue';
import { useCourseStore } from '../stores/courseStore';
import axios from 'axios';

// Slider Banners (Results & Achievements)
import slide2025 from '../assets/images/banner/2025_Slider.png';
import slide2024 from '../assets/images/gallery/webscroller-2024-Image-Apr-22-2026-05_33_59-PM.png';
import slide2023 from '../assets/images/gallery/WhatsApp-Image-2023-Results-04-22-at-5.37.44-PM.jpeg';
import slide2022 from '../assets/images/misc/website-scroller-CSE-2022-11-22-at-1.14.00-PM.jpeg';
import slide2021 from '../assets/images/misc/CSE-2021-11-22-at-1.14.00-PM.jpeg';

const slides = [
  slide2025,
  slide2024,
  slide2023,
  slide2022,
  slide2021
];

const currentSlide = ref(0);
const progressWidth = ref(0);
let slideInterval = null;

const triggerProgress = () => {
  progressWidth.value = 0;
  // Use nextTick equivalent timeout to trigger CSS transition restart
  setTimeout(() => {
    progressWidth.value = 100;
  }, 30);
};

const startSlideShow = () => {
  triggerProgress();
  slideInterval = setInterval(() => {
    currentSlide.value = (currentSlide.value + 1) % (slides.length + 1);
    triggerProgress();
  }, 6000);
};

const stopSlideShow = () => {
  if (slideInterval) clearInterval(slideInterval);
};

const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % (slides.length + 1);
  stopSlideShow();
  startSlideShow();
};

const prevSlide = () => {
  currentSlide.value = (currentSlide.value - 1 + (slides.length + 1)) % (slides.length + 1);
  stopSlideShow();
  startSlideShow();
};

const setSlide = (index) => {
  currentSlide.value = index;
  stopSlideShow();
  startSlideShow();
};

// Quick Category Images (from local assets/images/misc)
import imgMedSci        from '../assets/images/misc/Medical-Science.jpg';
import imgDoctor        from '../assets/images/misc/doctor-1.webp';
import imgMedSciMat     from '../assets/images/misc/1111111111.jpg';
import imgGSRevision    from '../assets/images/faculty/GS-Revision-Mentorship-Program-1.jpg';
import imgSociology     from '../assets/images/misc/Sociology-optional-by-Praveen-Kishore.png';
import imgPublicAdmin   from '../assets/images/misc/Aditya-sir.png';
import imgAnthropology  from '../assets/images/misc/Anthropology-optional-program.jpg';
import imgAchievements  from '../assets/images/misc/Achievments.jpg';
import imgToppers       from '../assets/images/misc/Toppers-Answer-Copies.jpg';
import imgTestimonials  from '../assets/images/misc/Testimonials.webp';
import imgFaculties     from '../assets/images/misc/Faculties.jpg';
import imgYoutube       from '../assets/images/misc/You-Tube.jpg';
import imgTelegram      from '../assets/images/misc/telegram.jpg';

// Distinguished Faculty Images
import imgKhanna from '../assets/images/faculty/faculty_khanna.png';
import imgIyer   from '../assets/images/faculty/faculty_iyer.png';
import imgShah   from '../assets/images/faculty/faculty_shah.png';
import imgRay    from '../assets/images/faculty/faculty_ray.png';

const distinguishedFaculty = [
  {
    name: "Dr. Rajesh Khanna",
    title: "Retired IAS Officer",
    subject: "Subject Expert: Ethics & Governance",
    image: imgKhanna
  },
  {
    name: "Smt. Meera Iyer",
    title: "Senior IPS (Retd.)",
    subject: "Subject Expert: Internal Security",
    image: imgIyer
  },
  {
    name: "Prof. Amit Shah",
    title: "PhD, Political Science",
    subject: "Subject Expert: International Relations",
    image: imgShah
  },
  {
    name: "Dr. Ananya Ray",
    title: "Former IRS Officer",
    subject: "Subject Expert: Indian Economy",
    image: imgRay
  }
];

const fallbackTestimonials = [
  {
    id: 1,
    student_name: "Aditya Vardhan",
    rating: 5,
    review_text: "IDI's personalized mentoring and answer writing evaluation for Medical Science optional was crucial for my UPSC success. The feedback from toppers was extremely precise.",
    course: { name: "Medical Science Optional Test Series" }
  },
  {
    id: 2,
    student_name: "Priyanka Deshmukh",
    rating: 5,
    review_text: "The Sociology program by IDI is comprehensive and structured. The daily answer writing program helped me structure my mains answers logically within the time limit.",
    course: { name: "Sociology Optional Program" }
  },
  {
    id: 3,
    student_name: "Rahul Sharma",
    rating: 5,
    review_text: "I highly recommend the GS Revision & Daily Answer Writing course. The one-to-one discussions over Google Meet resolved all my queries instantly.",
    course: { name: "GS Revision & Daily Answer Writing" }
  }
];

const courseStore = useCourseStore();
const loading = ref(false);
const testimonials = ref([]);

const featuredCourses = computed(() => courseStore.courses.slice(0, 3));

onMounted(async () => {
  startSlideShow();
  loading.value = true;
  try {
    await courseStore.fetchCourses();
    const testimonialsRes = await axios.get('/api/testimonials');
    if (testimonialsRes.data.data && testimonialsRes.data.data.length > 0) {
      testimonials.value = testimonialsRes.data.data;
    } else {
      testimonials.value = fallbackTestimonials;
    }
  } catch (error) {
    console.error('Failed to load data', error);
    testimonials.value = fallbackTestimonials;
  } finally {
    loading.value = false;
  }
});

onUnmounted(() => {
  stopSlideShow();
});
</script>

<style scoped>
.hero-section {
  position: relative;
  background: linear-gradient(135deg, #102a43 0%, #1e3e5c 100%);
}

.hero-bg-pattern {
  background-image: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.15) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(255,255,255,0.10) 0%, transparent 40%);
}

/* Slider fade transition */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1.2s ease-in-out;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0 !important;
}


.bg-primary {
  background-color: var(--primary, #1a56db);
}

.text-primary {
  color: var(--primary, #1a56db);
}

.border-primary {
  border-color: var(--primary, #1a56db);
}

.feature-card:hover {
  border-color: var(--primary, #1a56db);
  transform: translateY(-2px);
}

.stat-item {
  padding: 0.25rem 0;
}

/* ── QUICK CATEGORIES ── */
.quick-categories-section {
  background: #f5f5f5;
}

.quick-cat-title {
  color: #1a1a1a;
  letter-spacing: 0.12em;
}

.quick-cat-underline {
  width: 80px;
  height: 4px;
  background: linear-gradient(90deg, #f59e0b, #d97706);
  border-radius: 2px;
}

.quick-cat-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
}

@media (max-width: 1024px) {
  .quick-cat-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 640px) {
  .quick-cat-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }
}

.cat-card {
  display: flex;
  flex-direction: column;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.12);
  background: #fff;
  text-decoration: none;
  transition: transform 0.18s ease, box-shadow 0.18s ease;
  cursor: pointer;
}

.cat-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.18);
}

.cat-img-wrap {
  width: 100%;
  height: 140px;
  overflow: hidden;
  background: #e8eaf6;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.cat-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
}

.cat-img-portrait {
  object-position: center 15%;
}

.cat-img-icon-wrap {
  background: linear-gradient(135deg, #dbeafe, #bfdbfe);
}

.cat-big-icon {
  font-size: 4rem;
  line-height: 1;
}

.cat-label {
  background: #f59e0b;
  color: #1a1a1a;
  font-size: 0.72rem;
  font-weight: 700;
  text-align: center;
  padding: 8px 6px;
  line-height: 1.35;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  min-height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-top: 2px solid #d97706;
}
</style>
