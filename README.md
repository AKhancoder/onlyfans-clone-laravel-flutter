<div align="center">
 
<img src="https://moonfanspro.goodcoderz.com/public/img/logo-1763009781.png" alt="MoonFansPro Logo" width="160" />
 
# MoonFansPro — Creator Monetization Platform
 
**A full-featured OnlyFans clone** · Content subscriptions · PPV messaging · Live tipping · Shop · PWA
 
[![Live Demo](https://img.shields.io/badge/🌐_Live_Demo-moonfanspro.goodcoderz.com-4A90E2?style=for-the-badge)](https://moonfanspro.goodcoderz.com)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)]
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)]
[![AWS](https://img.shields.io/badge/AWS_S3-Storage-FF9900?style=for-the-badge&logo=amazonaws&logoColor=white)]
[![Stripe](https://img.shields.io/badge/Stripe-Payments-635BFF?style=for-the-badge&logo=stripe&logoColor=white)]
 
</div>
 
---
 
## 📋 Table of Contents
 
- [Overview](#-overview)
- [Live Demo](#-live-demo)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Architecture](#-architecture)
- [Project Structure](#-project-structure)
- [Database Schema](#-database-schema)
- [Installation](#-installation)
- [Environment Configuration](#-environment-configuration)
- [Payment Integration](#-payment-integration)
- [Media Storage](#-media-storage)
- [PWA Support](#-pwa-support)
- [Localization](#-localization)
- [Creator Earnings Model](#-creator-earnings-model)
- [Screenshots](#-screenshots)
- [Contributing](#-contributing)
- [License](#-license)
 
---
 
## 🌟 Overview
 
**MoonFansPro** is a production-ready, white-label creator monetization platform — a fully functional OnlyFans-style clone built on the **Laravel + MySQL** stack. It allows content creators to monetize their work through subscriptions, pay-per-view posts, tips, and a digital shop, while giving fans an immersive browsing and messaging experience.
 
It ships as a **Progressive Web App (PWA)**, supports **multi-language** (English, Spanish, Persian), and integrates with **Stripe** for payment processing and **AWS S3** for scalable media storage.
 
> 🎯 Perfect for launching your own creator economy platform — fully customizable, self-hosted, and white-label ready.
 
---
 
## 🔗 Live Demo
 
| URL | Description |
|-----|-------------|
| [moonfanspro.goodcoderz.com](https://moonfanspro.goodcoderz.com) | Full live platform demo |
| [/creators](https://moonfanspro.goodcoderz.com/creators) | Browse creator profiles |
| [/shop](https://moonfanspro.goodcoderz.com/shop) | Digital product shop |
| [/signup](https://moonfanspro.goodcoderz.com/signup) | Register as a creator or fan |
 
---
 
## ✨ Features
 
### 👤 Creator Features
- **Creator profiles** with custom bios, cover images, and avatar
- **Subscription tiers** — set a monthly subscription price or offer free access
- **Post types** — photos, videos, text posts, and audio
- **Pay-Per-View (PPV)** — lock individual posts behind a one-time payment
- **Stories** — ephemeral content visible to subscribers
- **Digital Shop** — sell physical or digital products directly from your profile
- **Live earnings dashboard** — real-time revenue tracking and payout management
- **Earnings simulator** — estimate monthly income based on follower count and subscription price
- **Referral system** — earn commissions by referring new creators
 
### 💬 Fan Features
- **Subscription management** — subscribe/unsubscribe from creators
- **Direct messaging** — chat with creators including PPV message unlocks
- **Tipping** — send tips to creators on posts and in messages
- **Bookmarks & likes** — save and interact with content
- **Discovery** — browse creators by category (Animation, Art, Design, Developer, and more)
- **Two-factor authentication (2FA)** — email-based OTP on login
 
### ⚙️ Platform / Admin Features
- **Admin dashboard** — manage users, creators, payouts, and reported content
- **Platform fee** — configurable percentage cut (default 5%) on all transactions
- **Multi-language support** — English, Español, Persian (RTL ready)
- **Blog system** — built-in CMS for platform news and articles
- **Static pages** — Terms, Privacy, About, How It Works, Cookies Policy
- **Cookie consent** — GDPR-compliant cookie banner
- **PWA** — installable web app with offline caching
- **SEO-ready** — clean URLs, meta tags, sitemap support
 
---
 
## 🛠️ Tech Stack
 
| Layer | Technology | Purpose |
|-------|-----------|---------|
| **Backend** | PHP 8.x | Core language |
| **Framework** | Laravel 10.x | MVC framework, routing, ORM, queues |
| **Database** | MySQL 8.0 | Relational data store |
| **ORM** | Eloquent (Laravel) | Model relationships, migrations |
| **Frontend** | Bootstrap 5.x | Responsive UI grid and components |
| **JS Layer** | jQuery 3.x | DOM manipulation, AJAX calls |
| **Templating** | Blade (Laravel) | Server-side view rendering |
| **Payments** | Stripe (Checkout + Connect) | Subscriptions, PPV, tips, payouts |
| **Media Storage** | AWS S3 | Scalable image and video storage |
| **Auth** | Laravel Breeze / Sanctum | Session auth, 2FA via email OTP |
| **Queue / Jobs** | Laravel Queues | Async notifications, email dispatch |
| **PWA** | Web App Manifest + Service Worker | Installable mobile-first experience |
| **Email** | SMTP / Mailgun | Transactional email delivery |
| **Server** | Nginx / Apache | Web server |
| **OS** | Ubuntu 22.04 LTS | Recommended deployment OS |
 
---
 
## 🏗️ Architecture
 
```
┌─────────────────────────────────────────────────────────────┐
│                        Client Layer                          │
│         Browser / PWA  ←→  Bootstrap 5 + jQuery 3          │
└─────────────────────────┬───────────────────────────────────┘
                          │ HTTP / HTTPS
┌─────────────────────────▼───────────────────────────────────┐
│                    Web Server (Nginx)                        │
└─────────────────────────┬───────────────────────────────────┘
                          │
┌─────────────────────────▼───────────────────────────────────┐
│              Laravel Application (PHP 8.x)                   │
│                                                             │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐  ┌───────────┐  │
│  │  Routes   │  │Controllers│  │  Models  │  │   Blade   │  │
│  │ web.php   │→ │ Creator  │→ │Eloquent  │  │  Views    │  │
│  │ api.php   │  │ Post     │  │ ORM      │  │Templates  │  │
│  └──────────┘  │ Payment  │  └────┬─────┘  └───────────┘  │
│                │ Auth     │       │                         │
│                └──────────┘       │                         │
└───────────────────────────────────┼─────────────────────────┘
                                    │
          ┌─────────────────────────┼──────────────────────┐
          │                         │                       │
┌─────────▼──────┐       ┌──────────▼──────┐    ┌──────────▼──────┐
│   MySQL 8.0    │       │    AWS S3        │    │  Stripe API      │
│  Relational DB │       │  Media Storage   │    │  Payments &      │
│  (Users, Posts │       │  (Images, Videos │    │  Connect Payouts │
│  Subs, Orders) │       │   Audio files)   │    │                  │
└────────────────┘       └─────────────────┘    └─────────────────┘
```
 
---
 
## 📁 Project Structure
 
```
moonfanspro/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/                   # Login, register, 2FA, password reset
│   │   │   ├── CreatorController.php   # Creator profile, settings, earnings
│   │   │   ├── PostController.php      # Post CRUD, PPV locking, media upload
│   │   │   ├── SubscriptionController.php # Subscribe/unsubscribe, billing
│   │   │   ├── MessageController.php   # DM threads, PPV message unlock
│   │   │   ├── PaymentController.php   # Stripe webhooks, tip processing
│   │   │   ├── ShopController.php      # Product listings, orders
│   │   │   ├── AdminController.php     # Admin panel, user management
│   │   │   └── PageController.php      # Static pages, blog
│   │   └── Middleware/
│   │       ├── CreatorMiddleware.php   # Restrict routes to creators
│   │       └── AdminMiddleware.php     # Restrict routes to admins
│   ├── Models/
│   │   ├── User.php                    # Users (fans & creators)
│   │   ├── Post.php                    # Posts (photo/video/text/audio)
│   │   ├── Subscription.php            # Fan → Creator subscriptions
│   │   ├── Message.php                 # DM messages
│   │   ├── Tip.php                     # Tips on posts and in DMs
│   │   ├── Order.php                   # Shop orders
│   │   ├── Product.php                 # Shop products
│   │   ├── Story.php                   # 24h ephemeral stories
│   │   ├── Payout.php                  # Creator payout records
│   │   └── Bookmark.php                # Fan bookmarks
│   └── Services/
│       ├── StripeService.php           # Stripe API abstraction
│       ├── MediaService.php            # S3 upload/delete helpers
│       └── EarningsService.php         # Revenue calculation logic
│
├── database/
│   ├── migrations/                     # All table migrations
│   └── seeders/                        # Demo data seeders
│
├── resources/
│   ├── views/
│   │   ├── layouts/                    # app.blade.php, admin.blade.php
│   │   ├── auth/                       # Login, register, 2FA views
│   │   ├── creator/                    # Profile, dashboard, settings
│   │   ├── post/                       # Feed, single post, create post
│   │   ├── messages/                   # DM inbox and thread views
│   │   ├── shop/                       # Product list and checkout
│   │   ├── admin/                      # Admin panel views
│   │   └── pages/                      # Terms, Privacy, Blog, etc.
│   ├── lang/
│   │   ├── en/                         # English strings
│   │   ├── es/                         # Spanish strings
│   │   └── pe/                         # Persian strings (RTL)
│   └── js/
│       ├── app.js                      # Main JS entrypoint
│       └── service-worker.js           # PWA offline caching
│
├── public/
│   ├── img/                            # Logo, home illustrations
│   ├── uploads/                        # Local upload fallback
│   ├── manifest.json                   # PWA manifest
│   └── index.php
│
├── routes/
│   ├── web.php                         # Web routes (authenticated + public)
│   └── api.php                         # API routes (future mobile app)
│
├── config/
│   ├── filesystems.php                 # S3 disk configuration
│   ├── services.php                    # Stripe keys configuration
│   └── app.php                         # App locale, timezone
│
├── .env.example                        # Environment variable template
├── composer.json
├── package.json
└── README.md
```
 
---
 
## 🗄️ Database Schema
 
### Core Tables
 
```sql
-- Users table (fans and creators share this table)
CREATE TABLE users (
  id            BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name          VARCHAR(255)        NOT NULL,
  username      VARCHAR(100) UNIQUE NOT NULL,
  email         VARCHAR(255) UNIQUE NOT NULL,
  password      VARCHAR(255)        NOT NULL,
  role          ENUM('user','creator','admin') DEFAULT 'user',
  bio           TEXT,
  avatar        VARCHAR(500),
  cover_image   VARCHAR(500),
  subscription_price DECIMAL(8,2)  DEFAULT 0.00,
  is_verified   BOOLEAN            DEFAULT FALSE,
  two_fa_enabled BOOLEAN           DEFAULT FALSE,
  stripe_account_id VARCHAR(255),
  created_at    TIMESTAMP,
  updated_at    TIMESTAMP
);
 
-- Posts table
CREATE TABLE posts (
  id            BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id       BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  type          ENUM('photo','video','text','audio') NOT NULL,
  body          TEXT,
  media_url     VARCHAR(500),
  is_ppv        BOOLEAN            DEFAULT FALSE,
  ppv_price     DECIMAL(8,2)       DEFAULT 0.00,
  likes_count   INT                DEFAULT 0,
  created_at    TIMESTAMP,
  updated_at    TIMESTAMP
);
 
-- Subscriptions table
CREATE TABLE subscriptions (
  id            BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fan_id        BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  creator_id    BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  stripe_sub_id VARCHAR(255),
  status        ENUM('active','cancelled','past_due') DEFAULT 'active',
  current_period_end TIMESTAMP,
  created_at    TIMESTAMP,
  updated_at    TIMESTAMP
);
 
-- Messages table
CREATE TABLE messages (
  id            BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  sender_id     BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  receiver_id   BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  body          TEXT,
  media_url     VARCHAR(500),
  is_ppv        BOOLEAN            DEFAULT FALSE,
  ppv_price     DECIMAL(8,2)       DEFAULT 0.00,
  is_read       BOOLEAN            DEFAULT FALSE,
  created_at    TIMESTAMP
);
 
-- Tips table
CREATE TABLE tips (
  id            BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fan_id        BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  creator_id    BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  post_id       BIGINT UNSIGNED     REFERENCES posts(id),
  message_id    BIGINT UNSIGNED     REFERENCES messages(id),
  amount        DECIMAL(8,2)        NOT NULL,
  stripe_charge_id VARCHAR(255),
  created_at    TIMESTAMP
);
 
-- Products (Shop) table
CREATE TABLE products (
  id            BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  creator_id    BIGINT UNSIGNED     NOT NULL REFERENCES users(id),
  name          VARCHAR(255)        NOT NULL,
  description   TEXT,
  price         DECIMAL(8,2)        NOT NULL,
  media_url     VARCHAR(500),
  stock         INT                DEFAULT NULL,
  created_at    TIMESTAMP,
  updated_at    TIMESTAMP
);
```
 
---
 
## 🚀 Installation
 
### Prerequisites
 
- PHP >= 8.1
- Composer
- Node.js >= 18 & npm
- MySQL 8.0
- An AWS account (S3 bucket)
- A Stripe account
 
### Steps
 
```bash
# 1. Clone the repository
git clone https://github.com/your-username/moonfanspro.git
cd moonfanspro
 
# 2. Install PHP dependencies
composer install
 
# 3. Install JS dependencies
npm install && npm run build
 
# 4. Copy and configure environment
cp .env.example .env
php artisan key:generate
 
# 5. Set up the database
php artisan migrate --seed
 
# 6. Create storage symlink
php artisan storage:link
 
# 7. Start the development server
php artisan serve
```
 
Visit `http://localhost:8000` in your browser.
 
---
 
## ⚙️ Environment Configuration
 
```env
APP_NAME=MoonFansPro
APP_ENV=production
APP_URL=https://yourdomain.com
APP_LOCALE=en
 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=moonfanspro
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
 
# AWS S3 — Media storage
AWS_ACCESS_KEY_ID=your_access_key
AWS_SECRET_ACCESS_KEY=your_secret_key
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=your-bucket-name
 
# Stripe — Payments
STRIPE_KEY=pk_live_...
STRIPE_SECRET=sk_live_...
STRIPE_WEBHOOK_SECRET=whsec_...
 
# Platform fee (percentage taken from creator earnings)
PLATFORM_FEE_PERCENT=5
 
# Mail
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=your_mail_user
MAIL_PASSWORD=your_mail_password
MAIL_FROM_ADDRESS=hello@yourdomain.com
MAIL_FROM_NAME="MoonFansPro"
```
 
---
 
## 💳 Payment Integration
 
MoonFansPro uses **Stripe** for all monetary flows:
 
| Flow | Stripe Feature Used |
|------|-------------------|
| Monthly subscriptions | Stripe Billing (Subscriptions API) |
| Pay-per-view posts | Stripe Checkout / Payment Intents |
| Tips on posts & DMs | Stripe Payment Intents |
| Shop purchases | Stripe Checkout |
| Creator payouts | Stripe Connect (Express accounts) |
 
### Stripe Webhook Events Handled
 
```
customer.subscription.created
customer.subscription.updated
customer.subscription.deleted
invoice.payment_succeeded
invoice.payment_failed
payment_intent.succeeded
account.updated                  ← Creator Connect onboarding
```
 
Configure your webhook endpoint in Stripe Dashboard to point to:
```
https://yourdomain.com/webhook/stripe
```
 
---
 
## ☁️ Media Storage
 
All user-uploaded content (profile avatars, cover images, post photos/videos, product images) is stored on **AWS S3**.
 
The `MediaService` handles:
- Streaming uploads directly to S3
- Generating signed URLs for private/PPV content
- Deleting media when posts or accounts are removed
 
Configure your S3 bucket with the following CORS policy:
 
```json
[
  {
    "AllowedHeaders": ["*"],
    "AllowedMethods": ["GET", "PUT", "POST", "DELETE"],
    "AllowedOrigins": ["https://yourdomain.com"],
    "ExposeHeaders": ["ETag"]
  }
]
```
 
---
 
## 📱 PWA Support
 
MoonFansPro ships as a **Progressive Web App**. Users on Chrome/Safari will be prompted to install it to their home screen.
 
Key files:
- `public/manifest.json` — App name, icons, theme color, display mode
- `public/js/service-worker.js` — Offline caching strategy (cache-first for static assets, network-first for API)
 
---
 
## 🌍 Localization
 
The platform supports 3 languages out of the box, switchable from any page via the footer language picker:
 
| Code | Language |
|------|---------|
| `en` | English (default) |
| `es` | Español |
| `pe` | Persian (RTL layout) |
 
Translation strings live in `resources/lang/{code}/`. To add a new language, create a new folder matching the ISO code and translate the string files.
 
---
 
## 💰 Creator Earnings Model
 
```
Fan pays $10/month subscription
    └─ Stripe fee:        ~$0.59  (2.9% + $0.30)
    └─ Platform fee:       $0.47  (5% of net)
    └─ Creator receives:  ~$8.94
```
 
The **earnings simulator** on the homepage lets prospective creators estimate income:
 
```
Estimated monthly earnings = (followers × 0.05 × subscription_price) × (1 - platform_fee)
```
 
---
 
## 📸 Screenshots
 
| Page | Preview |
|------|---------|
| Homepage | [moonfanspro.goodcoderz.com](https://moonfanspro.goodcoderz.com) |
| Creator Discovery | [/creators](https://moonfanspro.goodcoderz.com/creators) |
| Shop | [/shop](https://moonfanspro.goodcoderz.com/shop) |
 
---
 
## 🤝 Contributing
 
Contributions are welcome! Please follow these steps:
 
1. Fork the repository
2. Create your feature branch: `git checkout -b feature/your-feature-name`
3. Commit your changes: `git commit -m 'Add: your feature description'`
4. Push to the branch: `git push origin feature/your-feature-name`
5. Open a Pull Request
 
Please make sure your code follows PSR-12 coding standards and includes relevant tests where applicable.
 
---
 
<div align="center">
 
Built with ❤️ · [Live Demo](https://moonfanspro.goodcoderz.com) · [Report an Issue](https://github.com/your-username/moonfanspro/issues)
 
</div>
 
