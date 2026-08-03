<div>
    <section id="home" class="hero" aria-labelledby="hero-title">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow"><span class="status-dot" aria-hidden="true"></span> Senior Backend Developer</p>
                <h1 id="hero-title">حمیدرضا نیاکان</h1>
                <p class="hero-lead">بک‌اندی که زیر فشار واقعی، قابل اتکا باقی می‌ماند.</p>
                <p class="hero-description">
                    بیش از ۸ سال تجربه در طراحی و توسعه سامانه‌های تحت وب با Laravel، PHP و Go؛
                    از معماری API و بهینه‌سازی داده تا استقرار و پایش سرویس‌ها.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="button button-primary">
                        <i class="fas fa-paper-plane" aria-hidden="true"></i>
                        شروع گفتگو
                    </a>
                    <a href="{{ asset('assets/web/cv/cv.pdf') }}" class="button button-secondary" download>
                        <i class="fas fa-download" aria-hidden="true"></i>
                        دریافت رزومه
                    </a>
                </div>

                <div class="hero-links" aria-label="پروفایل‌های حرفه‌ای">
                    <a href="https://github.com/HamidNiakan" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github" aria-hidden="true"></i> GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/hamid-reza-niakan-563805113" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i> LinkedIn
                    </a>
                </div>
            </div>

            <div class="portrait-column">
                <figure class="portrait-frame">
                    <picture>
                        <source srcset="{{ asset('assets/web/image/me.webp') }}" type="image/webp">
                        <img src="{{ asset('assets/web/image/me-720.jpg') }}" alt="تصویر حمیدرضا نیاکان" width="720" height="720" fetchpriority="high" decoding="async">
                    </picture>
                    <figcaption>
                        <span>مستقر در تهران</span>
                        <span>همکاری حضوری و دورکار</span>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="container hero-facts" aria-label="خلاصه تخصص">
            <div><strong>+۸</strong><span>سال تجربه حرفه‌ای</span></div>
            <div><strong>Laravel / PHP / Go</strong><span>پشته اصلی توسعه</span></div>
            <div><strong>API &amp; Infrastructure</strong><span>تمرکز فنی</span></div>
        </div>
    </section>

    <section id="about" class="section section-light" aria-labelledby="about-title">
        <div class="container about-layout">
            <div class="section-heading">
                <p class="section-index">۰۱</p>
                <h2 id="about-title">درباره من</h2>
            </div>
            <div class="about-copy">
                <p>
                    توسعه‌دهنده بک‌اند با تمرکز بر ساخت سرویس‌های مقیاس‌پذیر و قابل نگهداری هستم. تجربه من شامل
                    APIهای RESTful، معماری ماژولار و Microservices، بهینه‌سازی پایگاه‌داده، پردازش‌های صف‌محور و
                    کار با Redis، Elasticsearch، Docker، Kubernetes و CI/CD است.
                </p>
                <p>
                    در پروژه‌های مختلف روی بهبود عملکرد سیستم، بازطراحی کدهای قدیمی و تبدیل نیاز محصول به راهکار
                    فنی قابل اجرا کار کرده‌ام و همکاری نزدیک با تیم‌های محصول و Front-end بخش ثابتی از کارم بوده است.
                </p>
                <ul class="work-principles" aria-label="اصول کاری">
                    <li><i class="fas fa-check" aria-hidden="true"></i> کد خوانا و قابل تست</li>
                    <li><i class="fas fa-check" aria-hidden="true"></i> تصمیم‌گیری مبتنی بر نیاز محصول</li>
                    <li><i class="fas fa-check" aria-hidden="true"></i> پایداری و مشاهده‌پذیری در Production</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="impact" class="section" aria-labelledby="impact-title">
        <div class="container">
            <div class="section-heading section-heading-row">
                <div>
                    <p class="section-index">۰۲</p>
                    <h2 id="impact-title">حوزه‌های اثرگذاری</h2>
                </div>
                <p>مسئله‌هایی که در آن‌ها بیشترین تجربه عملی را دارم.</p>
            </div>

            <div class="impact-grid">
                <article class="impact-card">
                    <span class="impact-number">01</span>
                    <i class="fas fa-diagram-project" aria-hidden="true"></i>
                    <h3>معماری و توسعه API</h3>
                    <p>طراحی RESTful API، احراز هویت و RBAC، معماری ماژولار و Microservices با تمرکز بر توسعه‌پذیری.</p>
                    <ul><li>Laravel Sanctum &amp; JWT</li><li>Swagger / OpenAPI</li><li>Go Microservices</li></ul>
                </article>
                <article class="impact-card">
                    <span class="impact-number">02</span>
                    <i class="fas fa-gauge-high" aria-hidden="true"></i>
                    <h3>کارایی و پردازش داده</h3>
                    <p>بهینه‌سازی Query و Index، پردازش‌های Asynchronous و طراحی جریان‌های داده برای بارهای واقعی.</p>
                    <ul><li>MySQL &amp; PostgreSQL</li><li>Redis &amp; Queue</li><li>Elasticsearch</li></ul>
                </article>
                <article class="impact-card">
                    <span class="impact-number">03</span>
                    <i class="fas fa-server" aria-hidden="true"></i>
                    <h3>تحویل و عملیات</h3>
                    <p>آماده‌سازی مسیر قابل تکرار برای تست، استقرار، Logging، Monitoring و مدیریت سرویس‌ها.</p>
                    <ul><li>Docker &amp; Kubernetes</li><li>GitLab CI/CD</li><li>Nginx &amp; Supervisor</li></ul>
                </article>
            </div>
        </div>
    </section>

    <section id="skills" class="section section-dark" aria-labelledby="skills-title">
        <div class="container skills-layout">
            <div class="section-heading">
                <p class="section-index">۰۳</p>
                <h2 id="skills-title">پشته فنی</h2>
                <p>ابزارهایی که در پروژه‌های واقعی با آن‌ها کار کرده‌ام.</p>
            </div>
            <div class="skill-groups">
                <div class="skill-group">
                    <h3>Backend</h3>
                    <p>PHP <span>·</span> Laravel <span>·</span> Livewire <span>·</span> Go <span>·</span> REST API</p>
                </div>
                <div class="skill-group">
                    <h3>Data</h3>
                    <p>MySQL <span>·</span> PostgreSQL <span>·</span> Redis <span>·</span> Elasticsearch <span>·</span> Logstash</p>
                </div>
                <div class="skill-group">
                    <h3>Delivery</h3>
                    <p>Docker <span>·</span> Kubernetes <span>·</span> GitLab CI/CD <span>·</span> Linux <span>·</span> Nginx</p>
                </div>
                <div class="skill-group">
                    <h3>Quality</h3>
                    <p>PHPUnit <span>·</span> Feature Test <span>·</span> Code Review <span>·</span> Sentry <span>·</span> Monitoring</p>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section section-light" aria-labelledby="experience-title">
        <div class="container experience-layout">
            <div class="section-heading experience-heading">
                <p class="section-index">۰۴</p>
                <h2 id="experience-title">سوابق کاری</h2>
                <p>برای مشاهده جزئیات هر موقعیت، آن را باز کنید.</p>
            </div>

            <div class="experience-list">
                <details class="experience-item" open>
                    <summary>
                        <span class="experience-date">آبان ۱۴۰۲ — اکنون</span>
                        <span class="experience-role">Senior Backend Developer (Laravel)</span>
                        <span class="experience-company">سمرتک · تهران</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </summary>
                    <div class="experience-body">
                        <ul>
                            <li>توسعه APIهای RESTful و سرویس‌های Backend با Laravel و معماری Microservices</li>
                            <li>بهینه‌سازی MySQL و PostgreSQL و طراحی Index و Queryهای کارآمد</li>
                            <li>پیاده‌سازی پردازش‌های Asynchronous با Queue، Job، Event و Redis</li>
                            <li>توسعه جست‌وجوی پیشرفته با Elasticsearch و Logstash</li>
                            <li>استقرار با Docker و Kubernetes و پیاده‌سازی Pipelineهای CI/CD</li>
                            <li>بازطراحی میکروسرویس‌ها با Go و مشارکت در Code Review</li>
                        </ul>
                    </div>
                </details>

                <details class="experience-item">
                    <summary>
                        <span class="experience-date">اردیبهشت ۱۴۰۲ — آبان ۱۴۰۲</span>
                        <span class="experience-role">Senior Backend Developer (Laravel)</span>
                        <span class="experience-company">آژانس دیجیتال مارکتینگ شازین · تهران</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </summary>
                    <div class="experience-body"><ul>
                        <li>توسعه فروشگاه اینترنتی با معماری ماژولار و Laravel</li>
                        <li>بهینه‌سازی ساختار پایگاه‌داده MySQL و عملکرد Queryها</li>
                        <li>بازطراحی داشبوردهای مدیریتی با Laravel Livewire و Blade</li>
                    </ul></div>
                </details>

                <details class="experience-item">
                    <summary>
                        <span class="experience-date">آذر ۱۴۰۰ — آذر ۱۴۰۱</span>
                        <span class="experience-role">Senior Backend Developer (Laravel)</span>
                        <span class="experience-company">نواندیشان فناوری اطلاعات الوند · شیراز</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </summary>
                    <div class="experience-body"><ul>
                        <li>مانیتورینگ Queue، Job و Redis با Laravel Horizon</li>
                        <li>استانداردسازی APIها با Sanctum، API Resource و Swagger</li>
                        <li>Refactor کدهای قدیمی و توسعه سامانه با معماری ماژولار</li>
                        <li>توسعه سیستم اشتراک، سطوح دسترسی، فیلترینگ و Push Notification</li>
                    </ul></div>
                </details>

                <details class="experience-item">
                    <summary>
                        <span class="experience-date">شهریور ۱۳۹۸ — آذر ۱۴۰۰</span>
                        <span class="experience-role">Junior Backend Developer (Laravel)</span>
                        <span class="experience-company">هوش مصنوعی اندیشه آریانا · شیراز</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </summary>
                    <div class="experience-body"><ul>
                        <li>پیکربندی سرور Linux و استقرار با Git و Nginx</li>
                        <li>پیاده‌سازی Cache با Redis و بهبود عملکرد Queryها</li>
                        <li>توسعه Notification، چت، احراز هویت دومرحله‌ای و Cron Job</li>
                        <li>پایش خطاهای Production با Sentry</li>
                    </ul></div>
                </details>

                <details class="experience-item">
                    <summary>
                        <span class="experience-date">دی ۱۳۹۶ — شهریور ۱۳۹۸</span>
                        <span class="experience-role">Junior Backend Developer</span>
                        <span class="experience-company">ثانیه‌پرداز اندیشه رسپینا و استارتاپ بازانو · شیراز</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </summary>
                    <div class="experience-body"><ul>
                        <li>توسعه Admin Panel با Angular و RESTful API</li>
                        <li>کار با GitLab، Merge Request و GitFlow</li>
                        <li>توسعه سامانه‌های انبارداری، نوبت‌دهی و مدیریت فروشگاهی</li>
                        <li>مهاجرت یک پروژه از PHP به Laravel</li>
                    </ul></div>
                </details>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact" aria-labelledby="contact-title">
        <div class="container contact-layout">
            <div class="contact-copy">
                <p class="section-index">۰۵</p>
                <h2 id="contact-title">برای یک گفت‌وگوی فنی آماده‌ام.</h2>
                <p>برای فرصت شغلی، همکاری پروژه‌ای یا تبادل نظر درباره یک مسئله بک‌اند، مستقیم با من در تماس باشید.</p>
            </div>
            <div class="contact-links">
                <a href="mailto:hamid.niakan1993@gmail.com">
                    <span><small>ایمیل</small><b dir="ltr">hamid.niakan1993@gmail.com</b></span>
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </a>
                <a href="tel:+989178223037">
                    <span><small>تلفن</small><b dir="ltr">+98 917 822 3037</b></span>
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </a>
                <a href="https://t.me/DeveloperProgrammer" target="_blank" rel="noopener noreferrer">
                    <span><small>تلگرام</small><b dir="ltr">@DeveloperProgrammer</b></span>
                    <i class="fab fa-telegram" aria-hidden="true"></i>
                </a>
                <a href="https://wa.me/989178223037" target="_blank" rel="noopener noreferrer">
                    <span><small>واتساپ</small><b dir="ltr">+98 917 822 3037</b></span>
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </a>
                <p><i class="fas fa-location-dot" aria-hidden="true"></i> تهران، ایران</p>
            </div>
        </div>
    </section>
</div>
