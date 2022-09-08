<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Access\Gate;

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
        Paginator::useBootstrap();
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        $this->register();
        
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        Gate::define('isAdmin', function ($user) {
            return $user->role == 'siswa';
        });

        Gate::define('isAdminSiswa', function ($user) {
            return $user->role == 'admin' or 'siswa';
        });

        Gate::define('isGeneral', function ($user) {
            return $user->role != 'admin' or 'siswa';
        });
    }
}
