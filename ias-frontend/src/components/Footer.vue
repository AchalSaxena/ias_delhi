<template>
  <footer class="bg-gray-900 text-white mt-20">
    <div class="container mx-auto px-4 py-12">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
        <!-- About -->
        <div>
          <h3 class="text-xl font-bold mb-1 text-primary">IAS Delhi Institute</h3>
          <p class="text-xs text-gray-500 mb-3 font-medium">UNIAID EDUCATION SERVICES LLP</p>
          <p class="text-gray-400 text-sm leading-relaxed">
            One-stop solution for all academic needs of UPSC aspirants. We train through curated modules and mentor individually — because each student is unique.
          </p>
          <p class="text-gray-500 text-xs mt-3 italic">"We make your dream a reality"</p>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2 text-gray-400 text-sm">
            <li><router-link to="/" class="hover:text-primary transition">Home</router-link></li>
            <li><router-link to="/courses" class="hover:text-primary transition">Programs</router-link></li>
            <li><router-link to="/about" class="hover:text-primary transition">About Us</router-link></li>
            <li><router-link to="/contact" class="hover:text-primary transition">Contact</router-link></li>
            <li>
              <a
                href="https://docs.google.com/forms/d/e/1FAIpQLSdTLsj46NIjIICHbHlEDsWWOubyxAUqlozH11-ODEDG3KI0wg/viewform"
                target="_blank"
                class="hover:text-primary transition"
              >
                Apply / Register
              </a>
            </li>
          </ul>
        </div>

        <!-- Real Contact Info -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Contact</h4>
          <ul class="space-y-3 text-gray-400 text-sm">
            <li class="flex items-start gap-2">
              <span class="mt-0.5">📍</span>
              <a href="https://maps.app.goo.gl/1mgFBMZ9AwxcKnUp6" target="_blank" class="hover:text-primary transition leading-snug">
                53/4, 1st Floor, Near Hotel Madonna,<br>
                Bada Bazar Road, Old Rajinder Nagar,<br>
                New Delhi – 110060
              </a>
            </li>
            <li class="flex items-center gap-2">
              <span>📞</span>
              <div>
                <a href="tel:9555098967" class="hover:text-primary transition block">9555098967 (Adesh sir)</a>
                <a href="tel:8527965204" class="hover:text-primary transition block">8527965204 (Gajanan sir)</a>
              </div>
            </li>
            <li class="flex items-center gap-2">
              <span>✉️</span>
              <a href="mailto:iasdelhi.org@gmail.com" class="hover:text-primary transition">iasdelhi.org@gmail.com</a>
            </li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Stay Updated</h4>
          <p class="text-gray-400 text-sm mb-3">Subscribe for the latest updates, new batches, and exam tips.</p>
          <NewsletterForm />
          <div class="mt-4 flex gap-3">
            <a href="https://t.me/iasdelhi" target="_blank" title="Telegram Channel" class="text-gray-400 hover:text-primary transition text-sm flex items-center gap-1">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a11.955 11.955 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.042-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.365-1.371.155-.479-.148-1.21-.462-1.805-.668-.725-.24-1.305-.589-1.25-.96.013-.087.147-.176.38-.287 1.468-.697 5.61-2.174 7.322-2.965.652-.419 1.23-.609 1.729-.609z"/></svg>
              Telegram
            </a>
            <a href="https://www.facebook.com/iasdelhi.org" target="_blank" title="Facebook" class="text-gray-400 hover:text-primary transition text-sm flex items-center gap-1">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              Facebook
            </a>
          </div>
        </div>
      </div>

      <!-- Divider -->
      <div class="border-t border-neutral-850 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
          <div class="space-y-2 text-center md:text-left">
            <p class="text-gray-400 text-sm">
              &copy; {{ new Date().getFullYear() }} IAS Delhi Institute (IDI) — UNIAID EDUCATION SERVICES LLP. All rights reserved.
            </p>
            <div class="flex flex-wrap justify-center md:justify-start gap-4 text-[10px] text-gray-500 font-bold uppercase tracking-wider">
              <router-link to="/site-map" class="hover:text-[#ffd504] transition">Site Map</router-link>
              <span class="text-neutral-800 hidden sm:inline">|</span>
              <router-link to="/privacy-policy" class="hover:text-[#ffd504] transition">Privacy Policy</router-link>
              <span class="text-neutral-800 hidden sm:inline">|</span>
              <router-link to="/terms-and-conditions" class="hover:text-[#ffd504] transition">Terms &amp; Conditions</router-link>
            </div>
          </div>
          <div class="flex gap-4">
            <a href="https://wa.me/919555098967?text=Hello%20IAS%20Delhi%20Institute%2C%20I%20want%20to%20inquire%20about%20your%20programs." target="_blank" title="WhatsApp" class="text-gray-400 hover:text-green-400 transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.783 1.14c-1.503.89-2.747 2.26-3.514 3.882-.768 1.622-.804 3.45-.104 5.091 1.372 3.441 4.744 5.77 8.39 5.77a9.923 9.923 0 001.289-.084c3.634-.508 6.718-3.247 7.594-6.817.876-3.57-.378-7.302-3.239-9.266a9.918 9.918 0 00-5.63-1.716zm0-2.08c5.228 0 9.468 4.239 9.468 9.467s-4.24 9.467-9.468 9.467C6.477 21.413 2.239 17.174 2.239 11.946s4.238-9.467 9.468-9.467z"/></svg>
            </a>
            <a href="https://t.me/iasdelhi" target="_blank" title="Telegram" class="text-gray-400 hover:text-primary transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a11.955 11.955 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.042-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.365-1.371.155-.479-.148-1.21-.462-1.805-.668-.725-.24-1.305-.589-1.25-.96.013-.087.147-.176.38-.287 1.468-.697 5.61-2.174 7.322-2.965.652-.419 1.23-.609 1.729-.609z"/></svg>
            </a>
            <a href="https://www.facebook.com/iasdelhi.org" target="_blank" title="Facebook" class="text-gray-400 hover:text-primary transition">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import NewsletterForm from './NewsletterForm.vue';
</script>

<style scoped>
.text-primary {
  color: var(--primary, #1a56db);
}

.hover\:text-primary:hover {
  color: var(--primary, #1a56db);
}
</style>
