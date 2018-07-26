<?php

namespace zenithcoder\facebook;

use Illuminate\Support\ServiceProvider;
//use zenithcoder\facebook\Facades\Facebook;
use zenithcoder\facebook\Library\Facebook;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
 		$this->loadRoutesFrom(__DIR__."/routes.php");
 		$this->publishes([__DIR__.'/Config/facebook.php' => config_path('facebook.php')]);

 		$this->loadViewsFrom(__DIR__.'/Views','fbp');

 		$this->publishes([__DIR__.'/Views' => resource_path('views/vendor/fbp')]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fbm', function($app)
        {
        	return new Facebook(config('facebook.fb'));
        });
    }
}
