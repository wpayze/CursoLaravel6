<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelsComposer;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Opcion 1 -> Share -> Inconveniente: hace un query cada vez que se cargue una pagina.
        //View::share("channels", Channel::all() );

        //Opcion 2 -> VIEW COMPOSER
        // View::composer( ['channel.index', 'post.create'] , function ($view) {
        //     $view->with("channels", Channel::orderBy("name")->get());
        // });

        //Opcion 3 -> Clase Dedicada
        View::composer( "partials.channel.*" , ChannelsComposer::class);
    }
}
