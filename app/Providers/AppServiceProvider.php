<?php

namespace App\Providers;

use App\Services\StripeBilling;
use App\Contracts\BillingInterface;
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
            // Exemple : partager une variable globale à toutes les vues
        view()->share('year', date('Y'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    // Exemple de bind (nouvelle instance à chaque fois)
    $this->app->bind(BillingInterface::class, StripeBilling::class);

    // Ou exemple de singleton (une seule instance partagée)
    // $this->app->singleton(BillingInterface::class, StripeBilling::class);
    }
}
