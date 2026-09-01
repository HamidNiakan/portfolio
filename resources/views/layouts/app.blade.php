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

@php
    $footerUrl = rtrim(config('app.url') ?: url('/'), '/');
    $shareUrl = urlencode($footerUrl);
    $shareText = urlencode('حمیدرضا نیاکان | متخصص Laravel و Go، توسعه‌دهنده بک‌اند');
@endphp
<footer class="footer" aria-labelledby="footer-title">
    <div class="container footer-inner">
        <div class="footer-brand">
            <a class="footer-mark" href="#home" aria-label="رفتن به ابتدای صفحه">HN</a>
            <div>
                <h2 id="footer-title">حمیدرضا نیاکان</h2>
                <p>متخصص Laravel و Go برای طراحی API، توسعه بک‌اند، بهینه‌سازی دیتابیس و استقرار Production.</p>
            </div>
        </div>

        <nav class="footer-nav" aria-label="لینک‌های اصلی">
            <h3>دسترسی سریع</h3>
            <a href="#about">درباره من</a>
            <a href="#impact">خدمات تخصصی</a>
            <a href="#skills">مهارت‌ها</a>
            <a href="#experience">سوابق کاری</a>
            <a href="#contact">تماس</a>
        </nav>

        <nav class="footer-nav" aria-label="تخصص‌های فنی">
            <h3>تخصص‌ها</h3>
            <a href="#impact">متخصص Laravel</a>
            <a href="#impact">برنامه‌نویس Go</a>
            <a href="#impact">طراحی REST API</a>
            <a href="#impact">بهینه‌سازی دیتابیس</a>
            <a href="#impact">Docker و DevOps</a>
        </nav>

        <div class="footer-contact">
            <h3>تماس مستقیم</h3>
            <a href="mailto:hamid.niakan1993@gmail.com" dir="ltr">hamid.niakan1993@gmail.com</a>
            <a href="tel:+989178223037" dir="ltr">+98 917 822 3037</a>
            <a href="https://t.me/DeveloperProgrammer" target="_blank" rel="noopener noreferrer" dir="ltr">@DeveloperProgrammer</a>
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
    </div>

    <div class="container footer-bottom">
        <p>© ۲۰۲۶ حمیدرضا نیاکان. توسعه بک‌اند با Laravel، Go و PHP.</p>

        <div class="footer-share" aria-label="اشتراک‌گذاری این صفحه">
            <span class="footer-share-label">اشتراک‌گذاری</span>
            <a href="https://t.me/share/url?url={{ $shareUrl }}&amp;text={{ $shareText }}" target="_blank" rel="noopener noreferrer" aria-label="اشتراک‌گذاری در تلگرام">
                <i class="fab fa-telegram" aria-hidden="true"></i>
            </a>
            <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="اشتراک‌گذاری در واتساپ">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="اشتراک‌گذاری در لینکدین">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&amp;text={{ $shareText }}" target="_blank" rel="noopener noreferrer" aria-label="اشتراک‌گذاری در توییتر / ایکس">
                <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/web/js/script.js') }}?v={{ $scriptV }}" defer></script>
</body>
</html>
