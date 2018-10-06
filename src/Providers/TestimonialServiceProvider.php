<?php

namespace Litecms\Testimonial\Providers;

use Illuminate\Support\ServiceProvider;

class TestimonialServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'testimonial');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'testimonial');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'litecms.testimonial');

        // Bind facade
        $this->app->bind('litecms.testimonial', function ($app) {
            return $this->app->make('Litecms\Testimonial\Testimonial');
        });

        // Bind Testimonial to repository
        $this->app->bind(
            'Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface',
            \Litecms\Testimonial\Repositories\Eloquent\TestimonialRepository::class
        );

        $this->app->register(\Litecms\Testimonial\Providers\AuthServiceProvider::class);

        $this->app->register(\Litecms\Testimonial\Providers\RouteServiceProvider::class);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['litecms.testimonial'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('litecms/testimonial.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/testimonial')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/testimonial')], 'lang');

        // Publish storage files
        $this->publishes([__DIR__ . '/../../storage' => base_path('storage')], 'storage');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
