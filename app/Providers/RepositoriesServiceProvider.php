<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
               'App\Repositories\Interfaces\StudentClassInterface',
               'App\Repositories\Student\StudentClassRepository'
        );

        $this->app->bind(
               'App\Repositories\Interfaces\MarkClassInterface',
               'App\Repositories\Mark\MarkClassRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
