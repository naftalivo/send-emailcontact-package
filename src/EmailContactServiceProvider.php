<?php

namespace Naftalivo\EmailContact;

use Illuminate\Support\ServiceProvider;

class EmailContactServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'emailcontact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/emailcontact.php','emailcontact');
        $this->publishes([
            __DIR__.'/config/emailcontact.php' => config_path('emailcontact.php'),
            __DIR__.'/views' => resource_path('views/vendor/emailcontact')
        ]);
    }

    public function register()
    {
        
    }
}