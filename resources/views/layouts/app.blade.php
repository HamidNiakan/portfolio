<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f4f3ec">
    @include('partials.seo')

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon-32.png') }}" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    @php
        $styleV = @filemtime(public_path('assets/web/css/style.css'));
        $scriptV = @filemtime(public_path('assets/web/js/script.js'));
    @endphp

    <link rel="preload" as="image" href="{{ asset('assets/web/image/me.webp') }}" type="image/webp" fetchpriority="high">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}?v={{ $styleV }}">

</head>
<body>
<a class="skip-link" href="#main-content">رفتن به محتوای اصلی</a>

<header class="navbar" data-navbar>
    <div class="container nav-inner">
        <a class="nav-brand" href="#home" aria-label="صفحه اصلی حمیدرضا نیاکان">
            <span class="brand-mark" aria-hidden="true">HN</span>
            <span>حمیدرضا نیاکان</span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="باز کردن منو">
            <i class="fas fa-bars" aria-hidden="true"></i>
        </button>

        <nav id="primary-navigation" class="nav-menu" aria-label="منوی اصلی">
            <a href="#about">درباره من</a>
            <a href="#impact">حوزه‌های اثرگذاری</a>
            <a href="#skills">مهارت‌ها</a>
            <a href="#experience">سوابق کاری</a>
            <a class="nav-contact" href="#contact">تماس</a>
        </nav>
    </div>
</header>

<main id="main-content">
    {{ $slot }}
</main>

<footer class="footer">
    <div class="container footer-inner">
        <p>© ۲۰۲۶ حمیدرضا نیاکان</p>
        <div class="footer-social" aria-label="شبکه‌های اجتماعی">
            <a href="https://github.com/HamidNiakan" target="_blank" rel="noopener noreferrer" aria-label="گیت‌هاب حمیدرضا نیاکان">
                <i class="fab fa-github" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/hamid-reza-niakan-563805113" target="_blank" rel="noopener noreferrer" aria-label="لینکدین حمیدرضا نیاکان">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
            </a>
            <a href="https://t.me/DeveloperProgrammer" target="_blank" rel="noopener noreferrer" aria-label="تلگرام حمیدرضا نیاکان">
                <i class="fab fa-telegram" aria-hidden="true"></i>
            </a>
            <a href="https://wa.me/989178223037" target="_blank" rel="noopener noreferrer" aria-label="واتساپ حمیدرضا نیاکان">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/web/js/script.js') }}?v={{ $scriptV }}" defer></script>
</body>
</html>
