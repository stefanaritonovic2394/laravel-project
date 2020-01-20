<?php

namespace App\Providers;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\CustomerRepositoryInterface;
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
        $this->app->when(CustomerController::class)
            ->needs(CustomerRepositoryInterface::class)
            ->give(function () {
                return new CustomerRepository();
            });

        $this->app->when(CompanyController::class)
            ->needs(CompanyRepositoryInterface::class)
            ->give(function () {
                return new CompanyRepository();
            });
//        $this->app->bind(
//            CustomerRepositoryInterface::class,
//            CustomerRepository::class
//        );
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
