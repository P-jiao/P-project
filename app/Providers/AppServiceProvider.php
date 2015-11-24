<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MailService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MailerService',function($app){
            return new MailerService();
        });
        $this->app->bind('App\Contracts\Mailer','App\Services\MailerService');
    }
}
