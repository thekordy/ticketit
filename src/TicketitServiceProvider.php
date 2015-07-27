<?php
namespace Kordy\Ticketit;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\ServiceProvider;

class TicketitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::macro('custom', function($type, $name, $value = "#000000", $options = [])
        {
            $field = $this->input($type, $name, $value, $options);
            return $field;
        });

        view()->composer('Ticketit::*', function ($view) {
            $master = config('ticketit.master_template');
            $view->with(compact('master'));
        });

        $this->loadViewsFrom(__DIR__.'/views', 'Ticketit');
        
        $this->publishes([__DIR__.'/views' => base_path('resources/views/vendor/ticketit')], 'views');
        $this->publishes([__DIR__.'/config/ticketit.php' => config_path('ticketit.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }
}
