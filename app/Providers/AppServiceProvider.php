<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $repositories  = [
            'Group','Template','Broadcast','User'
        ];

        foreach ($repositories as $name) {
            $this->app->bind(
                'App\Repositories\\'.$name.'\\'.$name.'RepositoryInterface',
                'App\Repositories\\'.$name.'\\'.$name.'Repository'
            );
        }
    }
}
