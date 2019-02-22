<?php namespace Skam\FormItems;

use Illuminate\Support\ServiceProvider;

class FormItemsServiceProvider extends ServiceProvider {
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
        ], 'fieldsViews');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-form-items'),
        ], 'colorPicker');
    }
}
