<?php

namespace parthrai\survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
