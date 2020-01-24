<?php

namespace App\Providers;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Interfaces\RepositoryInterface;
use App\Repositories\CompanyRepository;
use App\Repositories\CustomerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CustomerController::class, function ($app){
            return new CustomerController($app->make(CustomerRepository::class), $app->make(CompanyRepository::class));
        });

        $this->app->bind(CompanyController::class, function ($app){
            return new CompanyController($app->make(CompanyRepository::class));
        });

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
