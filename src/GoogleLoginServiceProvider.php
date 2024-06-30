<?php

namespace Manikandan1704\LaravelGoogleLogin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class GoogleLoginServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/googlelogin.php', 'googlelogin');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/googlelogin.php' => App::basePath('config/googlelogin.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
