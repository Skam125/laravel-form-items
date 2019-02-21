<?php namespace Skam\FormItems;

use Illuminate\Support\ServiceProvider;

class ManagerServiceProvider extends ServiceProvider {
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $viewPath = __DIR__.'/../resources/views';
        $this->loadViewsFrom($viewPath, 'laravel-form-items');
        $this->publishes([
            $viewPath => base_path('resources/views/vendor/laravel-form-items'),
        ], 'views');
    }
}