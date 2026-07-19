<template>
  <div>
    <!-- Hero Header Banner (Consistent Dark Academic Gradient) -->
    <section class="about-hero text-white py-12 relative overflow-hidden border-b border-neutral-900">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-neutral-900 to-blue-950"></div>
        <div class="hero-bg-pattern absolute inset-0 opacity-20"></div>
      </div>
      <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <h1 class="text-3xl md:text-4xl font-black mb-2 tracking-wide drop-shadow-md">Terms and Conditions</h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed drop-shadow">
          Please read these terms and conditions carefully before enrolling or transacting on our website.
        </p>
      </div>
    </section>

    <!-- Main Content Area -->
    <div class="container mx-auto px-4 py-12 max-w-4xl">
      <div class="bg-neutral-950 border border-neutral-850 rounded-2xl p-6 md:p-10 space-y-8 text-xs leading-relaxed text-gray-300">
        
        <!-- Official Site Disclaimer -->
        <div class="bg-neutral-900 border-l-4 border-amber-500 rounded-r-xl p-5 space-y-2">
          <h3 class="text-xs font-black uppercase text-amber-400 tracking-wider">Transaction Agreement</h3>
          <p class="text-[13px] leading-relaxed text-white">
            "Information on this website is as per the best of our knowledge. By doing transaction through this website for IAS Delhi Institute (IDI), you will be deemed to be accepting the terms and conditions updated periodically."
          </p>
          <div class="pt-2">
            <a 
              href="https://drive.google.com/file/d/1MMYoB8rFGaDEHC8XdTv_T43fh6bNZsSC/view?pli=1" 
              target="_blank"
              class="inline-flex items-center gap-1.5 text-xs font-extrabold text-[#ffd504] hover:underline"
            >
              📄 View Original Terms &amp; Conditions Document (PDF) ↗
            </a>
          </div>
        </div>

        <!-- Detailed Terms Clauses -->
        <section class="space-y-3">
          <h2 class="text-sm font-black text-white uppercase tracking-wider">1. Course Enrollment &amp; Verification</h2>
          <p>
            Admission to any course or test series at IAS Delhi Institute (IDI) is valid only for the candidate in whose name the payment has been made. Candidates are required to provide correct academic details and transaction IDs in the enrollment form. The institute reserves the right to cancel enrollment if any duplicate or fraudulent details are submitted.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-sm font-black text-white uppercase tracking-wider">2. Refund &amp; Cancellation Policy</h2>
          <p>
            All course and test series fees are paid to <strong>UNIAID EDUCATION SERVICES LLP</strong>.
          </p>
          <ul class="list-disc pl-5 space-y-1.5">
            <li><strong>No Refunds:</strong> Fees once paid are non-refundable and non-transferable under any circumstances.</li>
            <li><strong>Batch Shifting:</strong> Under special circumstances (medical emergencies or UPSC timeline changes), batch shift requests may be evaluated by the administrator, subject to seat availability.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-sm font-black text-white uppercase tracking-wider">3. Intellectual Property Rights</h2>
          <p>
            All study materials, questions, model approach answers, daily evaluation criteria, and videos provided by IAS Delhi Institute are the intellectual property of <strong>UNIAID EDUCATION SERVICES LLP</strong>.
          </p>
          <ul class="list-disc pl-5 space-y-1.5">
            <li>Unauthorized copying, sharing, recording, selling, or circulating of study materials on public forums or private Telegram groups will result in instant cancellation of course access without refund.</li>
            <li>Legal action under the Intellectual Property Rights and Copyright Act will be pursued against candidates violating these terms.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-sm font-black text-white uppercase tracking-wider">4. Evaluation &amp; Mentorship Timelines</h2>
          <ul class="list-disc pl-5 space-y-1.5">
            <li>Daily answer submissions must be uploaded as PDF files before the specified deadline. Evaluated sheets are returned with detailed feedback within 24 to 48 hours of submission.</li>
            <li>Weekly phone consultation and personal doubt clearing hours are subject to schedules aligned by individual mentors.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-sm font-black text-white uppercase tracking-wider">5. Disclaimer &amp; Limitation of Liability</h2>
          <p>
            The programs are designed to train, practice, and guide civil services aspirants. However, success in the Civil Services Examination (CSE) depends entirely on the student's individual preparation, dedication, and examination day performance. IAS Delhi Institute does not guarantee selection or success in the UPSC CSE.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-sm font-black text-white uppercase tracking-wider">6. Dispute Resolution and Jurisdiction</h2>
          <p>
            These terms shall be governed by and constructed in accordance with the laws of India. Any disputes arising out of or related to these terms shall be subject to the exclusive jurisdiction of courts located in <strong>New Delhi</strong> only.
          </p>
        </section>

        <!-- PDF Embed Card -->
        <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 text-center space-y-3">
          <h3 class="font-bold text-white text-sm uppercase tracking-wide">Need to read the detailed PDF file?</h3>
          <p class="text-xs text-gray-400 max-w-md mx-auto">
            You can access the official terms and conditions documentation directly on Google Drive by clicking the button below:
          </p>
          <div class="pt-2">
            <a 
              href="https://drive.google.com/file/d/1MMYoB8rFGaDEHC8XdTv_T43fh6bNZsSC/view?pli=1" 
              target="_blank"
              class="bg-amber-500 text-black px-6 py-2.5 rounded-lg text-xs font-black uppercase tracking-wider hover:bg-amber-600 transition inline-block cursor-pointer"
            >
              Open Google Drive PDF ↗
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
// Terms and Conditions Page View
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
</style>
