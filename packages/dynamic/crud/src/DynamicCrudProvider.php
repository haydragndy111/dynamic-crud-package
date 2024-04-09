<?php

namespace Dynamic\Crud;

use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Expr\Include_;

class DynamicCrudProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Dynamic\Crud\controllers\CrudController');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $this->loadRoutesFrom(base_path('routes.php'));
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // include __DIR__.'/routes.php';
    }
}
