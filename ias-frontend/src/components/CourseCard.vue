<template>
  <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition transform hover:scale-105">
    <!-- Image -->
    <div class="aspect-video bg-gray-200 overflow-hidden flex items-center justify-center">
      <img 
        v-if="resolveThumbnail(course.thumbnail_url)" 
        :src="resolveThumbnail(course.thumbnail_url)" 
        :alt="course.name"
        class="w-full h-full object-cover"
      >
      <svg v-else class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
    </div>

    <!-- Content -->
    <div class="p-4">
      <!-- Category Badge -->
      <span class="inline-block bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full mb-2">
        {{ course.category }}
      </span>

      <!-- Title -->
      <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">
        {{ course.name }}
      </h3>

      <!-- Instructor -->
      <p class="text-sm text-gray-600 mb-2">
        👨‍🏫 {{ course.instructor }}
      </p>

      <!-- Level & Duration -->
      <div class="flex justify-between text-sm text-gray-600 mb-3">
        <span>{{ course.level }}</span>
        <span>{{ course.duration_hours }}h</span>
      </div>

      <!-- Price -->
      <div class="flex justify-between items-center">
        <span class="text-2xl font-bold text-primary">
          ₹{{ course.price }}
        </span>
        <router-link 
          :to="`/courses/${course.id}`"
          class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-dark transition"
        >
          View Details
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import imgMedSci        from '../assets/images/misc/Medical-Science.jpg';
import imgDoctor        from '../assets/images/misc/doctor-1.webp';
import imgMedSciMat     from '../assets/images/misc/1111111111.jpg';
import imgGSRevision    from '../assets/images/faculty/GS-Revision-Mentorship-Program-1.jpg';
import imgSociology     from '../assets/images/misc/Sociology-optional-by-Praveen-Kishore.png';
import imgPublicAdmin   from '../assets/images/misc/Aditya-sir.png';
import imgAnthropology  from '../assets/images/misc/Anthropology-optional-program.jpg';

defineProps({
  course: {
    type: Object,
    required: true
  }
});

const imageMap = {
  'Medical-Science.jpg': imgMedSci,
  'doctor-1.webp': imgDoctor,
  '1111111111.jpg': imgMedSciMat,
  'GS-Revision-Mentorship-Program-1.jpg': imgGSRevision,
  'Sociology-optional-by-Praveen-Kishore.png': imgSociology,
  'Aditya-sir.png': imgPublicAdmin,
  'Anthropology-optional-program.jpg': imgAnthropology,
};

const resolveThumbnail = (url) => {
  if (!url) return null;
  if (url.startsWith('http://') || url.startsWith('https://') || url.startsWith('data:')) {
    return url;
  }
  const filename = url.split('/').pop();
  return imageMap[filename] || url;
};
</script>

<style scoped>
.text-primary {
  color: var(--primary, #3B82F6);
}

.bg-primary {
  background-color: var(--primary, #3B82F6);
}

.bg-primary\/10 {
  background-color: rgba(59, 130, 246, 0.1);
}

.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
