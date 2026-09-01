@php
    $siteUrl = rtrim(config('app.url') ?: url('/'), '/');
    $seoTitle = 'حمیدرضا نیاکان | متخصص Laravel و Go، توسعه‌دهنده بک‌اند';
    $seoDescription = 'متخصص Laravel و Go برای توسعه بک‌اند، طراحی REST API، بهینه‌سازی MySQL و PostgreSQL، Redis، Docker و استقرار Production؛ آماده همکاری پروژه‌ای و تیمی.';
    $socialDescription = 'توسعه بک‌اند با Laravel، PHP و Go؛ از طراحی API و میکروسرویس تا بهینه‌سازی دیتابیس، Docker و استقرار Production.';
    $seoUrl = $siteUrl;
    $seoImage = $siteUrl.'/assets/web/image/me.png';
    $seoImageAlt = 'تصویر حمیدرضا نیاکان، متخصص Laravel و Go';
    $seoBanner = $siteUrl.'/assets/web/image/og-banner.png';
    $seoBannerAlt = 'حمیدرضا نیاکان، متخصص Laravel و Go و توسعه‌دهنده ارشد بک‌اند';

    $structuredData = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'WebSite',
                '@id' => $seoUrl.'#website',
                'url' => $seoUrl,
                'name' => 'پورتفولیوی حمیدرضا نیاکان',
                'alternateName' => 'Hamidreza Niakan Portfolio',
                'description' => $seoDescription,
                'inLanguage' => 'fa-IR',
                'publisher' => ['@id' => $seoUrl.'#person'],
            ],
            [
                '@type' => 'ProfilePage',
                '@id' => $seoUrl.'#profile-page',
                'url' => $seoUrl,
                'name' => $seoTitle,
                'description' => $seoDescription,
                'inLanguage' => 'fa-IR',
                'isPartOf' => ['@id' => $seoUrl.'#website'],
                'mainEntity' => ['@id' => $seoUrl.'#person'],
                'primaryImageOfPage' => ['@id' => $seoUrl.'#profile-image'],
                'about' => ['@id' => $seoUrl.'#person'],
            ],
            [
                '@type' => 'ImageObject',
                '@id' => $seoUrl.'#profile-image',
                'url' => $seoImage,
                'contentUrl' => $seoImage,
                'width' => 747,
                'height' => 752,
                'caption' => $seoImageAlt,
            ],
            [
                '@type' => 'Person',
                '@id' => $seoUrl.'#person',
                'name' => 'حمیدرضا نیاکان',
                'alternateName' => 'Hamidreza Niakan',
                'url' => $seoUrl,
                'image' => ['@id' => $seoUrl.'#profile-image'],
                'mainEntityOfPage' => ['@id' => $seoUrl.'#profile-page'],
                'jobTitle' => 'متخصص Laravel و Go، توسعه‌دهنده ارشد بک‌اند',
                'description' => $seoDescription,
                'email' => 'mailto:hamid.niakan1993@gmail.com',
                'telephone' => '+989178223037',
                'sameAs' => [
                    'https://github.com/HamidNiakan',
                    'https://www.linkedin.com/in/hamid-reza-niakan-563805113',
                    'https://t.me/DeveloperProgrammer',
                ],
                'knowsAbout' => [
                    'Laravel',
                    'لاراول',
                    'PHP',
                    'Go',
                    'Golang',
                    'برنامه‌نویسی Go',
                    'توسعه بک‌اند',
                    'Back-end Development',
                    'REST API',
                    'طراحی API',
                    'Microservices',
                    'Docker',
                    'Kubernetes',
                    'Redis',
                    'MySQL',
                    'PostgreSQL',
                    'Elasticsearch',
                    'CI/CD',
                    'بهینه‌سازی پایگاه‌داده',
                ],
                'knowsLanguage' => ['fa', 'en'],
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'تهران',
                    'addressCountry' => 'IR',
                ],
                'hasOccupation' => [
                    '@type' => 'Occupation',
                    'name' => 'Senior Backend Developer / Laravel and Go Specialist',
                    'description' => 'طراحی و توسعه بک‌اند، REST API، میکروسرویس و سامانه‌های مقیاس‌پذیر با Laravel، PHP و Go',
                    'skills' => 'Laravel, PHP, Go, Golang, REST API, Microservices, MySQL, PostgreSQL, Redis, Docker, Kubernetes, CI/CD',
                ],
                'contactPoint' => [
                    [
                        '@type' => 'ContactPoint',
                        'contactType' => 'professional inquiries',
                        'email' => 'hamid.niakan1993@gmail.com',
                        'telephone' => '+989178223037',
                        'availableLanguage' => ['fa', 'en'],
                    ],
                    [
                        '@type' => 'ContactPoint',
                        'contactType' => 'Telegram',
                        'url' => 'https://t.me/DeveloperProgrammer',
                        'availableLanguage' => ['fa', 'en'],
                    ],
                    [
                        '@type' => 'ContactPoint',
                        'contactType' => 'WhatsApp',
                        'url' => 'https://wa.me/989178223037',
                        'telephone' => '+989178223037',
                        'availableLanguage' => ['fa', 'en'],
                    ],
                ],
            ],
        ],
    ];
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="author" content="حمیدرضا نیاکان">
<meta name="robots" content="index, follow, max-image-preview:large">

<link rel="canonical" href="{{ $seoUrl }}">
<link rel="alternate" hreflang="fa-IR" href="{{ $seoUrl }}">
<link rel="alternate" hreflang="x-default" href="{{ $seoUrl }}">

<meta property="og:type" content="profile">
<meta property="og:url" content="{{ $seoUrl }}">
<meta property="og:site_name" content="پورتفولیوی حمیدرضا نیاکان">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $socialDescription }}">
<meta property="og:image" content="{{ $seoBanner }}">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $seoBannerAlt }}">
<meta property="og:locale" content="fa_IR">
<meta property="profile:first_name" content="حمیدرضا">
<meta property="profile:last_name" content="نیاکان">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $socialDescription }}">
<meta name="twitter:image" content="{{ $seoBanner }}">
<meta name="twitter:image:alt" content="{{ $seoBannerAlt }}">

<script type="application/ld+json">
    {!! json_encode($structuredData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}
</script>
