<?php

namespace App\Providers;

use App\Repositories\BrandsEloquentORM;
use App\Repositories\BrandsRepositoryInterface;

use App\Repositories\CategoriesEloquentORM;
use App\Repositories\CategoriesRepositoryInterface;

use App\Repositories\ImagesRepositoryInterface;
use App\Repositories\ImageUploadStorage;

use App\Repositories\LocationEloquentORM;
use App\Repositories\LocationRepositoryInterface;

use App\Repositories\ProductEloquentORM;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    */
    public function register(): void
    {

        
        $this->app->bind(
            ProductRepositoryInterface::class, 
            ProductEloquentORM::class
        );

        $this->app->bind(
            LocationRepositoryInterface::class,
            LocationEloquentORM::class
        );

        $this->app->bind(
            ImagesRepositoryInterface::class,
            ImageUploadStorage::class
        );
        $this->app->bind(
            CategoriesRepositoryInterface::class,
            CategoriesEloquentORM::class
        );
        $this->app->bind(
            BrandsRepositoryInterface::class,
            BrandsEloquentORM::class
        );
    }

    /**
    * Bootstrap any application services.
    */
    public function boot(): void
    {
        //
    }
}
