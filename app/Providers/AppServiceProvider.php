<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Vendor;
use App\Models\BranchManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['products.*'], function($view) {
            $view->with('vendors', Vendor::orderBy('name')->get())
                ->with('branchManagers', BranchManager::orderBy('branch_name')->get());
        });
    }
}
