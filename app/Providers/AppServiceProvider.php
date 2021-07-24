<?php

namespace App\Providers;


use App\Http\View\Composers\ChannelComposer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Models\Channel;
use App\PostCardSendingSerivce;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PostCard', function($app){
            return new PostCardSendingSerivce('us' , 40 , 50);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // view()->composer(['posts.*' , 'channels.index'] , function(View $view){
        //     $view->with("channels" , Channel::orderBy('id' , 'desc')->get());
        // });
        //when we need to perform some calculation or major task
        view()->composer('partials.channels.*', ChannelComposer::class);


    }
}
