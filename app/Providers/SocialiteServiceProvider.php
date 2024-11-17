<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\GoogleProvider;
use GuzzleHttp\Client;

class SocialiteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Socialite::extend('google', function ($app) {
            $config = $app['config']['services.google'];
            $googleProvider = Socialite::buildProvider(GoogleProvider::class, $config);
            return $googleProvider->setHttpClient(new Client(['verify' => false]))
                ->with(['prompt' => 'select_account']);
        });
    }
}
