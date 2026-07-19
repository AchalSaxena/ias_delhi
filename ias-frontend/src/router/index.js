import { createRouter, createWebHistory } from 'vue-router';
import { useAuthStore } from '../stores/authStore';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: () => import('../views/Home.vue'),
    meta: { title: 'IAS Delhi Institute - Home' }
  },
  {
    path: '/courses',
    name: 'Courses',
    component: () => import('../views/Courses.vue'),
    meta: { title: 'IAS Delhi Institute - Courses' }
  },
  {
    path: '/courses/:id',
    name: 'CourseDetail',
    component: () => import('../views/CourseDetail.vue'),
    meta: { title: 'Course Details' }
  },
  {
    path: '/study-material',
    name: 'StudyMaterial',
    component: () => import('../views/StudyMaterial.vue'),
    meta: { title: 'Study Material & Library - IAS Delhi Institute' }
  },
  {
    path: '/about',
    name: 'About',
    component: () => import('../views/About.vue'),
    meta: { title: 'IAS Delhi Institute - About Us' }
  },
  {
    path: '/services/anthropology-optional-programs',
    name: 'AnthropologyPrograms',
    component: () => import('../views/Anthropology.vue'),
    meta: { title: 'Anthropology Optional Programs - IAS Delhi Institute' }
  },
  {
    path: '/services/medical-science-optional',
    name: 'MedicalScienceOptional',
    component: () => import('../views/MedicalScienceOptional.vue'),
    meta: { title: 'Medical Science Optional - IAS Delhi Institute' }
  },
  {
    path: '/services/sociology-optional',
    name: 'SociologyOptional',
    component: () => import('../views/SociologyOptional.vue'),
    meta: { title: 'Sociology Optional - IAS Delhi Institute' }
  },
  {
    path: '/services/public-administration',
    name: 'PublicAdministration',
    component: () => import('../views/PublicAdminOptional.vue'),
    meta: { title: 'Public Administration Optional - IAS Delhi Institute' }
  },
  {
    path: '/services/toppers-answer-copies',
    name: 'ToppersAnswerCopies',
    component: () => import('../views/TopperCopies.vue'),
    meta: { title: "Toppers' Answer Copies - IAS Delhi Institute" }
  },
  {
    path: '/services/toppers-testimonials',
    name: 'ToppersTestimonials',
    component: () => import('../views/TopperTestimonials.vue'),
    meta: { title: "Toppers' Testimonials - IAS Delhi Institute" }
  },
  {
    path: '/services/youtube-channel',
    name: 'YouTubeChannel',
    component: () => import('../views/YouTubeChannel.vue'),
    meta: { title: 'YouTube Channel - IAS Delhi Institute' }
  },
  {
    path: '/services/student-rooms-directory',
    name: 'StudentRoomsDirectory',
    component: () => import('../views/ORNDirectory.vue'),
    meta: { title: 'Student Rooms Directory - IAS Delhi Institute' }
  },
  {
    path: '/contact',
    name: 'Contact',
    component: () => import('../views/Contact.vue'),
    meta: { title: 'IAS Delhi Institute - Contact Us' }
  },
  {
    path: '/site-map',
    name: 'Sitemap',
    component: () => import('../views/Sitemap.vue'),
    meta: { title: 'Site Map - IAS Delhi Institute' }
  },
  {
    path: '/privacy-policy',
    name: 'PrivacyPolicy',
    component: () => import('../views/PrivacyPolicy.vue'),
    meta: { title: 'Privacy Policy - IAS Delhi Institute' }
  },
  {
    path: '/terms-and-conditions',
    name: 'TermsConditions',
    component: () => import('../views/TermsConditions.vue'),
    meta: { title: 'Terms and Conditions - IAS Delhi Institute' }
  },
  {
    path: '/admin/login',
    name: 'AdminLogin',
    component: () => import('../views/AdminLogin.vue'),
    meta: { title: 'Admin Login' }
  },
  {
    path: '/admin/dashboard',
    name: 'AdminDashboard',
    component: () => import('../views/AdminDashboard.vue'),
    meta: { 
      title: 'Admin Dashboard',
      requiresAuth: true 
    }
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

// Navigation guard for protected routes
router.beforeEach((to, from, next) => {
  const authStore = useAuthStore();
  
  if (to.meta.requiresAuth && !authStore.token) {
    next({ name: 'AdminLogin', query: { redirect: to.fullPath } });
  } else if (to.name === 'AdminLogin' && authStore.token) {
    next({ name: 'AdminDashboard' });
  } else {
    next();
  }
});

// Update page title
router.afterEach((to) => {
  document.title = to.meta.title || 'IAS Delhi Institute';
});

export default router;
