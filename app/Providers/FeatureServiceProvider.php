<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;

class FeatureServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Feature::define('news', fn (User $user) => match (true) {
            default => false,
        });
        Feature::define('ecosystem', fn (User $user) => match (true) {
            default => false,
        });

        Feature::define('extended-functions', fn (User $user) => match (true) {
            $user->isSuperAdmin() => true,
            $user->company->is_premium => true,
            default => false,
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
