<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrapFour();

        // Force HTTPS in production (Render uses reverse proxy)
        if (config('app.env') === 'production') {
            \Illuminate\Support\Facades\URL::forceScheme('https');
            \Illuminate\Support\Facades\Request::setTrustedProxies(
                ['REMOTE_ADDR'],
                \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_FOR |
                \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_HOST |
                \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PORT |
                \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PROTO
            );
        }
    }
}
