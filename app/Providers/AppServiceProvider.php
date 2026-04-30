<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\MovieRepositoryInterface;
use App\Repositories\MovieRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(
            MovieRepositoryInterface::class,
            MovieRepository::class
        );
    }
    
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
