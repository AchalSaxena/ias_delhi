# Implementation Plan: Full Content & Image Asset Integration

This plan details the full content and real image asset integration for all 14 IAS Delhi Institute pages from the sidebar list. It lists the complete copied content, specifies the downloaded image assets, and details the vertical sidebar layout structure.

---

## User Review Required

> [!IMPORTANT]
> - **Vertical Sidebar Navigation Component**: We will implement a custom sticky vertical sidebar list (`ServiceSidebar.vue`) on all educational services views, matching the layout of the original WordPress portal.
> - **Real Image Assets**: We have successfully crawled and downloaded the exact featured images/banners from `iasdelhi.org` into the project's local assets. They will be imported and rendered in each page's header card.
> - **Unified Routes**: Each link in the sidebar will navigate immediately to its corresponding route.

---

## Downloaded Image Assets Mapping

All images have been downloaded to the local directory: `src/assets/images/misc/`

| Page Section Name | Asset Filename | Purpose |
| :--- | :--- | :--- |
| **Medical Science Optional** | `medical_science_optional_test_series.jpg` | Main Course Header Banner |
| **Daily Answer Writing (Med Sci)** | `daily_answer_writing__medical_science.jpg` | Timetable Schedule Header |
| **Medical Science Study Material** | `medical_science_study_material.jpeg` | Order Booklets Banner |
| **GS Mentorship Program** | `gs_revision___daily_answer_writing.jpg` | Mentorship Guidance Header |
| **Sociology Optional** | `sociology_optional_programs.jpg` | Praveen Kishore Sir's Program Banner |
| **Public Administration** | `public_administration_programs.jpg` | Pub Ad Course Header |
| **Anthropology Optional** | `anthropology_optional_programs.png` | Focus Group Study Timetable Banner |
| **IDI Selections** | `idi_s_selections.jpg` | Toppers Collage Poster |
| **Toppers' Answer Copies** | `toppers__answer_copies.jpg` | Downloads Page Cover |
| **Toppers' Testimonials** | `toppers__testimonials.png` | Testimonials Page Header |
| **Faculty Members** | `faculties_of_ias_delhi_institute__idi_.jpg` | Faculty Members Directory Header |
| **YouTube Channel** | `youtube_channel.jpg` | Strategy Videos Section Card |
| **Telegram Link** | `idi_telegram_channel.jpg` | Channel Link Badge |
| **Student Rooms Directory** | `mh_rooms_in_delhi_upsc.jpg` | Accommodation Directory Banner |

---

## Copied Content of Every Page

### 1. Medical Science Optional Test Series
* **Pricing Packages**:
  * Offline Mode: ₹10,000 | Online Mode: ₹8,000
  * Offline Mode (with Notes): ₹12,000 | Online Mode (with Notes): ₹10,000
  * *Group Discount*: Groups of 2+ receive ₹1,000 off per student.
* **Core Offerings**:
  * Test discussion videos of all Full-Length Tests.
  * UPSC Toppers' guidance: Dr. Ishika Singh (AIR 206), Dr. Aaditya Sharma (IAS), Dr. Anshu Priya (AIR 16), Dr. Aswathy Sriniwas (AIR 40), Dr. Akshita Gupta (AIR 69).
  * 100% flexible schedules valid until January 2027.
  * Rapid evaluation within 4 days with model answers.

### 2. Daily Answer Writing - Medical Science
* **Schedules & Fees**:
  * 4 Months Program (120 Days targets) - ₹16,000
  * 2 Months Program (60 Days targets) - ₹12,000
* **Day-wise targets**:
  * Anatomy (Day 1-11), Physiology (Day 12-21), Biochemistry (Day 22-27), Pharmacology (Day 28-37), Pathology (Day 38-45), FMT (Day 46-52), Microbiology (Day 53-60), Medicine (Day 61-75), Psychiatry (Day 76-79), Dermatology (Day 80-82), Paediatrics (Day 83-90), OBGYN (Day 91-100), Surgery (Day 101-112), PSM (Day 113-120).

### 3. Medical Science Study Material
* **Booklets**:
  * 1. Complete PYQs Analysis Book - ₹500 (incl. courier)
  * 2. Comprehensive Notes on Entire Syllabus - ₹3,000 (incl. courier)
* **Ordering Form Link**: `https://forms.gle/fVpBKeUgySzP7KRt9`.

### 4. GS Revision & Daily Answer Writing (Mentorship)
* **Mentorship & Fees**:
  * 8 Months GS Pre-cum-Mains Mentorship Program (2027)
  * Without Daily Classes: ₹18,000
  * With Daily Classes: ₹26,000
* **Syllabus parameters**:
  * 237-day study target targets (3 to 4 hours per day target).
  * Daily 4 subjective GS mains questions + 20 GS prelims MCQs.
  * 1 Essay test every month with live evaluated sessions.

### 5. Sociology Optional Programs
* **Sociology Foundation Course 2027**:
  * Duration: 5 Months | Class Timings: 2 PM to 4 PM | Class Days: 5 days/week.
  * Fees: ₹30,000 (Hybrid offline/online mode with 1-year recording access).
* **Sociology Test Series cum Mentorship 2027**:
  * Fees: ₹20,000 | Evaluated by Praveen Kishore Sir (9910944333).
  * 20 Topic-wise tests + 4 Comprehensive tests.

### 6. Public Administration Programs
* **Public Administration Mentorship Program 2027**:
  * Format: 5 Months / 3 Months Daily PYQs writing.
  * Fees (Both papers): ₹14,000 | Paper-I: ₹7,500 | Paper-II: ₹7,500.
  * Covers Paper I in 75 days & Paper II in 65 days.
  * Evaluated by Gajanan Sir / Adesh Sir.

### 7. Anthropology Optional Programs
* **Anthropology Daily PYQ Writing Focus Group**:
  * Duration: 2 Months (54 Days targets).
  * Fees: Both papers: ₹9,500 | Single paper: ₹5,000.
  * Max Batch Size: 20 students. Daily targets require 4 hours of study.

### 8. IDI's Selections & Achievements
* **UPSC CSE 2025 Mains Toppers**: Prince Gupta, Sulabh Jain, Sonam Jorwal, Sanket Kumbhar, Kunal Patil, Saurabh Suryawanshi, Monitkumar Gabhane.
* **UPSC CSE 2024 Toppers**: Anurag Ghuge (AIR 624), Apoorv Amrut Balpande (IPS), Dr. Varun Gowda (IPS), Dr. Sachin Goel (IRS), Dr. Akanksha Jha (IRMS), Dr. Megha Rajora.

### 9. Toppers' Answer Copies
Provides links to download mock copies:
* **Medical Science**: Ishika Singh (AIR 206), Raunak Sharma (AIR 659), Shivraj Gangawal (AIR 788), Sachin Goel (AIR 209).
* **GS Mentorship**: Swami Shubham (AIR 523), Anurag Ghuge (AIR 624).
* **Anthropology**: Pratik Juikar (AIR 177 - Tests 3 to 9).
* **PSIR Optional**: Amit Ranjan (AIR 431), Shubham Satyam (AIR 497).

### 10. Toppers' Testimonials
* Detailed comments and guidance logs from Dr. Aaditya Sharma (IAS), Dr. Danish Rabbani Khan, Apoorv Balpande, Dr. Rekha Meena (IPS), Aswathy Srinivas (IAS AIR 40), and Yogesh Patil (IAS AIR 231).

### 11. Faculties of IAS DELHI INSTITUTE (IDI)
* Core coordinators: **Adesh Mule Sir** (GS & Optional Director), **Gajanan Sir** (Public Administration & Answer writing mentor), **Praveen Kishore Sir** (Sociology Optional Guide).

### 12. YouTube Channel Strategy Videos
* Links to strategy sessions on YouTube:
  * Amit Kale (IAS 2019) - Prelims Test Discussion.
  * Dr. Akshita Gupta (AIR 69) - Medical Science Strategy.
  * Girish Kalagonda (AIR 307) - PSIR Strategy.
  * Yogesh Patil (AIR 63) - Anthropology Strategy.

### 13. IDI Telegram Channel
* Official notifications channel `@iasdelhi` containing updates.

### 14. MH Rooms in Delhi UPSC
* Supporting channels to locate rooms/PG flats in Old Rajinder Nagar, Delhi for out-of-town candidates: `@MH_Rooms_Delhi` / `https://t.me/MH_Rooms_Delhi2`.

---

## Proposed Code Structure

We will create a reusable **Vertical Sidebar Navigation** layout and map routes for each of these sections.

### Sidebar Layout (`src/components/ServiceSidebar.vue`)
A sticky vertical panel listing the links:
* Medical Science Optional
* Daily Answer Writing (Med Sci)
* Medical Science Study Material
* GS Mentorship Program
* Sociology Optional
* Public Administration Optional
* Anthropology Optional
* IDI Selections
* Toppers' Answer Copies
* Toppers' Testimonials
* Faculty Members
* YouTube Channel Videos
* Telegram Link
* Student Rooms Directory

### New Views to Create

#### [NEW] [SociologyOptional.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/SociologyOptional.vue)
- Renders NCERT reading lists, Praveen Kishore Sir's evaluator badge, test schedules, page banner image, and the sidebar.

#### [NEW] [PublicAdminOptional.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/PublicAdminOptional.vue)
- Renders Paper I & II details, daily targeting parameters, mentorship fees, page banner image, and the sidebar.

#### [NEW] [AnthropologyOptional.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/AnthropologyOptional.vue)
- Renders 54-day study plan, 20-student batch limits, PDF upload instructions, page banner image, and the sidebar.

#### [NEW] [MedicalScienceOptional.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/MedicalScienceOptional.vue)
- Renders Test Series & Daily Answer Writing (4-month and 2-month schedules), Notes support packages, topper list, page banner image, and the sidebar.

#### [NEW] [TopperCopies.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/TopperCopies.vue)
- Renders categorised PDF download cards for UPSC toppers, page banner image, and the sidebar.

#### [NEW] [TopperTestimonials.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/TopperTestimonials.vue)
- Renders toppers feedback cards and strategies, page banner image, and the sidebar.

#### [NEW] [YouTubeChannel.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/YouTubeChannel.vue)
- Renders strategy video links embedded beautifully, page banner image, and the sidebar.

#### [NEW] [ORNDirectory.vue](file:///c:/xampp/htdocs/app/ias-frontend/src/views/ORNDirectory.vue)
- Renders student rooms, PGs, water supply, repairs, and clinics directory listings, page banner image, and the sidebar.

#### [MODIFY] [router/index.js](file:///c:/xampp/htdocs/app/ias-frontend/src/router/index.js)
- Register all new page routes.

---

## Verification Plan

- Verify Vite hot-reloading completes without errors.
- Confirm clicking any sidebar menu link loads the correct content view.
