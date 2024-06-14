<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // DESCOMENTAR ESTAS LINES CUANDO SE VAYA A DEPLOYAR
        // $this->app->bind('path.public',function(){
        //     return'/domains/huella-digital.mx/public_html';
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
