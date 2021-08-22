<?php

namespace App\Providers;

use App\Repositories\Ads\AdInterface;
use App\Repositories\Ads\AdRepository;
use Illuminate\Support\ServiceProvider;

class RpositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
          AdInterface::class,
          AdRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
