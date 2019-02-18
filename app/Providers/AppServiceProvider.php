<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //compartilar o mesm o valor dentro da aplicação na view
        View::share('key', 'Carlos');

        //registrando um listener para degubar todos erros de sql
        DB::listen(function($query){
           var_dump($query->sql);
           var_dump($query->bindings);
           var_dump($query->time);
        });
    }
}
