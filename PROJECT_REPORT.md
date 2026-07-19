# IAS Delhi Institute — Project Report

## Project overview

This is a Phase 1 rebuild of the IAS Delhi Institute website. It provides a public course catalogue, inquiry and newsletter forms, testimonials, and a protected admin dashboard.

## Technology

| Area | Implementation |
| --- | --- |
| Frontend | Vue 3, Vite, Pinia, Vue Router, Tailwind CSS 4 |
| Backend | Laravel 12, PHP 8.2+, Laravel Sanctum |
| Database | MySQL (`ias_delhi`) |
| Notifications | Telegram Bot API for inquiry alerts |
| Direct chat | WhatsApp click-to-chat link |

## Completed features

### Public website

- Home, About, Contact, Courses, and Course Details pages.
- Searchable and category-filtered course catalogue.
- Course inquiry form with validation.
- Approved testimonials displayed publicly.
- Newsletter subscription form.
- WhatsApp click-to-chat and Telegram-channel links.

### Backend API

- Public course, inquiry, testimonial, newsletter subscription, and admin login endpoints.
- Laravel validation and JSON error responses.
- Pagination for course listings.
- Telegram notification attempted after each successful inquiry; failures are logged and never block the form submission.
- Sanctum token authentication and an admin-only middleware for all management endpoints.

### Administration

- Secure administrator login.
- Dashboard counts for courses, inquiries, testimonials, and newsletter subscribers.
- Inquiry deletion.
- Pending testimonial approval and deletion.
- Seeded administrator account for first local run.

## Required configuration

The backend configuration file is `ias-backend/.env`. It currently contains placeholder Telegram values, which must be replaced before live notifications can work:

```env
TELEGRAM_BOT_TOKEN=your-real-bot-token
TELEGRAM_CHAT_ID=your-real-chat-id
```

Keep these values private. Do not commit a real `.env` file to source control.

The MySQL database configuration must also point to a running local MySQL instance:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ias_delhi
DB_USERNAME=root
DB_PASSWORD=
```

Create the database if it does not already exist:

```sql
CREATE DATABASE ias_delhi;
```

## Local startup

1. Set the real Telegram values in `ias-backend/.env`.
2. Ensure MySQL is running and the `ias_delhi` database exists.
3. Prepare the backend:

```powershell
cd C:\Users\SAXENA\Desktop\app\ias-backend
php artisan migrate --seed
php artisan serve
```

4. In a second terminal, start the frontend:

```powershell
cd C:\Users\SAXENA\Desktop\app\ias-frontend
npm.cmd run dev
```

Open `http://localhost:5173`. The frontend proxies API requests to `http://localhost:8000`.

## Initial administrator

After `php artisan migrate --seed`, sign in at `/admin/login` with:

- Email: `admin@iasdelhi.org`
- Password: `ChangeMe123!`

Change this password before deploying beyond a local development environment.

## Verification completed

- Laravel test suite: passed (2 tests).
- PHP syntax checks: passed for the notification controller and admin middleware.
- Vue production build: passed.

## Deployment notes

- Replace all placeholder contact, social-media, WhatsApp, and Telegram channel URLs with real organisation details.
- Use a strong, unique administrator password and production database credentials.
- Set `APP_ENV=production` and `APP_DEBUG=false` in production.
- Use HTTPS and configure CORS/stateful Sanctum domains if frontend and backend are hosted on different domains.
