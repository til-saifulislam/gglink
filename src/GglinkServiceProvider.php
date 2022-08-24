<?php

namespace Alien\Gglink;

//use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\ServiceProvider;

class GglinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'gglink');
    }


    public function register()
    {
        
    }
}