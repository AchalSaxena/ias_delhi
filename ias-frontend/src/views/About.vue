<template>
  <div>
    <!-- Header Banner (Clean Dark Academic Theme) -->
    <section class="about-hero text-white py-12 md:py-14 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-3xl md:text-4xl font-black mb-3 tracking-wide drop-shadow-md">About Us</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          IAS Delhi Institute (IDI) — Your partner in civil services preparation
        </p>
        <div class="flex items-center gap-2 mt-4 text-xs text-gray-450">
          <span class="text-[#ffd504]">📍</span>
          <span>Old Rajinder Nagar, New Delhi · Est. 2016</span>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-16">

      <!-- Who We Are -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <div>
          <h2 class="text-3xl font-bold mb-6">Who We Are</h2>
          <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>IAS Delhi Institute (IDI)</strong> is a one-stop solution for all the academic needs which a candidate develops along his path to become a civil servant. Registered as <strong>UNIAID EDUCATION SERVICES LLP</strong>, we are based in Old Rajinder Nagar (ORN), New Delhi — the hub of UPSC preparation.
          </p>
          <p class="text-gray-700 mb-4 leading-relaxed">
            Our focus is on training UPSC aspirants through various curated modules, and then mentoring them individually. Our experience tells us that each student is unique and their strong points need individual attention — which is why our approach is always personalized.
          </p>
          <p class="text-gray-700 leading-relaxed">
            We offer programs in Sociology, Anthropology, History, Public Administration, Medical Science, Political Science, General Studies, and more — covering both Mains optionals and GS answer writing.
          </p>
          <div class="mt-6 flex gap-4">
            <a
              href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform"
              target="_blank"
              class="bg-primary text-white px-6 py-2.5 rounded-lg font-semibold hover:opacity-90 transition text-sm"
            >
              Apply / Register Now
            </a>
            <router-link to="/contact" class="border border-primary text-primary px-6 py-2.5 rounded-lg font-semibold hover:bg-primary hover:text-white transition text-sm">
              Contact Us
            </router-link>
          </div>
        </div>

        <!-- Right: Institute Image Card with real logo + faculties photo -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 flex flex-col justify-center items-center gap-4">
          <img :src="logoImg" alt="IAS Delhi Institute Logo" class="w-40 h-auto object-contain drop-shadow-md" />
          <h3 class="text-2xl font-bold text-gray-800">IAS Delhi Institute</h3>
          <p class="text-gray-600 italic text-center">"We make your dream a reality"</p>
          <div class="space-y-2 text-sm text-gray-600 w-full">
            <div class="flex items-center gap-2">
              <span class="text-green-500">&#10003;</span>
              <span>UNIAID EDUCATION SERVICES LLP</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-green-500">&#10003;</span>
              <span>Founded in 2016</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-green-500">&#10003;</span>
              <span>Old Rajinder Nagar, New Delhi – 110060</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-green-500">&#10003;</span>
              <span>Offline &amp; Online programs available</span>
            </div>
          </div>
          <!-- Faculty group photo -->
          <img
            :src="imgFaculties"
            alt="IAS Delhi Institute Faculties"
            class="w-full rounded-xl object-contain mt-1"
          />
        </div>
      </div>

      <!-- Mission & Vision -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        <div class="bg-white rounded-xl shadow-md p-8 border-l-4 border-primary">
          <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
          <p class="text-gray-700 leading-relaxed">
            To train UPSC aspirants through curated modules and mentor them individually — because each aspirant is unique and their preparation needs personal attention. We strive to be a complete one-stop solution for every academic need along the path to becoming a civil servant.
          </p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-8 border-l-4 border-accent">
          <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
          <p class="text-gray-700 leading-relaxed">
            To be the most trusted institute for UPSC optional and GS preparation in Delhi — delivering quality evaluation by experienced faculties and UPSC toppers, enabling every aspirant to realize their dream of serving the nation.
          </p>
        </div>
      </div>

      <!-- Statistics -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
        <div class="text-center p-6 bg-gray-50 rounded-xl">
          <div class="text-4xl font-bold text-primary mb-2">2016</div>
          <p class="text-gray-600">Year Founded</p>
        </div>
        <div class="text-center p-6 bg-gray-50 rounded-xl">
          <div class="text-4xl font-bold text-primary mb-2">7+</div>
          <p class="text-gray-600">Optional Subjects</p>
        </div>
        <div class="text-center p-6 bg-gray-50 rounded-xl">
          <div class="text-4xl font-bold text-primary mb-2">24–48h</div>
          <p class="text-gray-600">Answer Evaluation</p>
        </div>
        <div class="text-center p-6 bg-gray-50 rounded-xl">
          <div class="text-4xl font-bold text-primary mb-2">ORN</div>
          <p class="text-gray-600">Old Rajinder Nagar, Delhi</p>
        </div>
      </div>

      <!-- Faculty Section — with real photos -->
      <div class="mb-16">
        <h2 class="text-3xl font-bold text-center mb-4">Our Faculty</h2>
        <p class="text-gray-600 text-center mb-10 max-w-xl mx-auto">
          Experienced mentors and evaluators who have guided hundreds of UPSC aspirants to success.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

          <!-- Adesh Mule Sir -->
          <div class="faculty-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
            <div class="h-44 overflow-hidden bg-blue-50">
              <img :src="imgFaculties" alt="Faculties of IAS Delhi Institute" class="w-full h-full object-cover object-top" />
            </div>
            <div class="p-5 text-center">
              <h3 class="text-lg font-bold mb-1">Adesh Mule Sir</h3>
              <p class="text-primary font-medium text-xs mb-2">Director &amp; UPSC Mentor</p>
              <p class="text-gray-650 text-xs leading-relaxed line-clamp-3">
                Handles admissions and overall academic guidance. Primary contact for all program inquiries.
              </p>
              <a href="tel:9555098967" class="mt-3 inline-flex items-center gap-1.5 text-xs text-primary font-semibold hover:underline">
                📞 9555098967
              </a>
            </div>
          </div>

          <!-- Gajanan Sir -->
          <div class="faculty-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
            <div class="h-44 overflow-hidden bg-green-50">
              <img :src="imgPublicAdmin" alt="Faculty — Public Administration" class="w-full h-full object-cover object-top" />
            </div>
            <div class="p-5 text-center">
              <h3 class="text-lg font-bold mb-1">Gajanan Sir</h3>
              <p class="text-primary font-medium text-xs mb-2">Faculty &amp; Program Coordinator</p>
              <p class="text-gray-650 text-xs leading-relaxed line-clamp-3">
                Coordinates program schedules, batch management, and student support across subjects.
              </p>
              <a href="tel:8527965204" class="mt-3 inline-flex items-center gap-1.5 text-xs text-primary font-semibold hover:underline">
                📞 8527965204
              </a>
            </div>
          </div>

          <!-- Praveen Kishore Sir -->
          <div class="faculty-card bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition">
            <div class="h-44 overflow-hidden bg-purple-50">
              <img :src="imgSociology" alt="Praveen Kishore Sir — Sociology Expert" class="w-full h-full object-cover object-top" />
            </div>
            <div class="p-5 text-center">
              <h3 class="text-lg font-bold mb-1">Praveen Kishore Sir</h3>
              <p class="text-primary font-medium text-xs mb-2">Sociology Expert &amp; Evaluator</p>
              <p class="text-gray-650 text-xs leading-relaxed line-clamp-3">
                Evaluates Sociology optional answer scripts. Leads the Sociology Test Series cum Mentorship program.
              </p>
              <a href="tel:9910944333" class="mt-3 inline-flex items-center gap-1.5 text-xs text-primary font-semibold hover:underline">
                📞 9910944333
              </a>
            </div>
          </div>

        </div>
      </div>

      <!-- CSE Results / Achievements Gallery -->
      <div class="mb-16">
        <h2 class="text-3xl font-bold text-center mb-4">Our Selections</h2>
        <p class="text-gray-600 text-center mb-8 max-w-xl mx-auto">
          IDI students have consistently cracked UPSC CSE Mains and Interviews. Here are some of our proud selections.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
            <img :src="imgResult2024" alt="CSE 2024 Results" class="w-full h-44 object-cover group-hover:scale-105 transition duration-300" />
            <div class="bg-primary text-white text-center text-xs font-bold py-2 uppercase tracking-wider">CSE 2024</div>
          </div>
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
            <img :src="imgResult2023" alt="CSE 2023 Results" class="w-full h-44 object-cover group-hover:scale-105 transition duration-300" />
            <div class="bg-primary text-white text-center text-xs font-bold py-2 uppercase tracking-wider">CSE 2023</div>
          </div>
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
            <img :src="imgResult2022" alt="CSE 2022 Results" class="w-full h-44 object-cover group-hover:scale-105 transition duration-300" />
            <div class="bg-primary text-white text-center text-xs font-bold py-2 uppercase tracking-wider">CSE 2022</div>
          </div>
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
            <img :src="imgAchievements" alt="IDI Achievements" class="w-full h-44 object-cover group-hover:scale-105 transition duration-300" />
            <div class="bg-amber-500 text-white text-center text-xs font-bold py-2 uppercase tracking-wider">IDI Achievements</div>
          </div>
        </div>
      </div>

      <!-- Location Section -->
      <div class="bg-gray-50 rounded-2xl p-8 mb-8">
        <h2 class="text-2xl font-bold mb-6 text-center">📍 Visit Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
          <div>
            <p class="text-gray-700 leading-relaxed mb-4">
              <strong>53/4, 1st Floor,</strong> Near Hotel Madonna, Above Jiledar Book Store<br>
              (entry from back side), Bada Bazar Road,<br>
              Old Rajinder Nagar (ORN),<br>
              New Delhi – 110060
            </p>
            <div class="space-y-2 text-sm text-gray-600">
              <div class="flex items-center gap-2">
                <span>📞</span> <a href="tel:7678249423" class="hover:text-primary">7678249423 / 9555098967</a>
              </div>
              <div class="flex items-center gap-2">
                <span>✉️</span> <a href="mailto:iasdelhi.org@gmail.com" class="hover:text-primary">iasdelhi.org@gmail.com</a>
              </div>
            </div>
            <a
              href="https://maps.app.goo.gl/1mgFBMZ9AwxcKnUp6"
              target="_blank"
              class="mt-4 inline-flex items-center gap-2 bg-primary text-white px-5 py-2 rounded-lg text-sm font-medium hover:opacity-90 transition"
            >
              🗺️ Open in Google Maps
            </a>
          </div>
          <div class="bg-white rounded-xl p-4 shadow-sm border text-center text-gray-400 text-sm">
            <div class="text-5xl mb-3">🗺️</div>
            <p>Old Rajinder Nagar (ORN), New Delhi</p>
            <p class="font-semibold text-gray-600 mt-1">PIN: 110060</p>
            <a href="https://maps.app.goo.gl/1mgFBMZ9AwxcKnUp6" target="_blank" class="text-primary hover:underline text-xs mt-2 inline-block">
              Click to view on Google Maps →
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>

<script setup>
import logoImg          from '../assets/images/logo/iasdelhi_logo.png';
import imgFaculties     from '../assets/images/misc/Faculties.jpg';
import imgSociology     from '../assets/images/misc/Sociology-optional-by-Praveen-Kishore.png';
import imgPublicAdmin   from '../assets/images/misc/Aditya-sir.png';
import imgResult2024    from '../assets/images/gallery/webscroller-2024-Image-Apr-22-2026-05_33_59-PM.png';
import imgResult2023    from '../assets/images/gallery/WhatsApp-Image-2023-Results-04-22-at-5.37.44-PM.jpeg';
import imgResult2022    from '../assets/images/misc/website-scroller-CSE-2022-11-22-at-1.14.00-PM.jpeg';
import imgAchievements  from '../assets/images/misc/Achievments.jpg';
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

.bg-primary {
  background-color: var(--primary, #1a56db);
}

.border-primary {
  border-left-color: var(--primary, #1a56db);
}

.border-accent {
  border-left-color: var(--accent, #7c3aed);
}

.text-primary {
  color: var(--primary, #1a56db);
}

.faculty-card:hover {
  transform: translateY(-3px);
}

.drop-shadow-md {
  filter: drop-shadow(0 4px 6px rgba(0,0,0,0.12));
}
</style>
