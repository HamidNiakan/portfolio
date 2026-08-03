<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // When APP_URL is https (production behind a TLS-terminating proxy),
        // force generated URLs to use that scheme and host. Without this,
        // url('/') follows the (http) request scheme the proxy forwards, so the
        // canonical / og:url / JSON-LD @ids render as http and hurt SEO.
        $appUrl = (string) config('app.url');

        if (str_starts_with($appUrl, 'https://')) {
            URL::forceScheme('https');
            URL::forceRootUrl($appUrl);
        }
    }
}
