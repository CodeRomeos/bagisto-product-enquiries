<?php

namespace CodeRomeos\BagistoBookings\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class BagistoBookingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin-routes.php');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/shop-routes.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'bagistobookings');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'bagistobookings');

        Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('bagistobookings::admin.layouts.style');
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php', 'acl'
        );
    }
}