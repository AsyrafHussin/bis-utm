<?php

namespace App\Providers;

use App\Http\Livewire\CalculatorMainTab;
use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;

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
        Filament::serving(function () {
            Filament::registerScripts([
                asset('assets/export/filament-export.js'),
            ]);

            Filament::registerStyles([
                asset('assets/export/filament-export.css'),
            ]);

            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Manage'),
                NavigationGroup::make()
                    ->label('Admin Settings')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('References')
                    ->collapsed(),
            ]);
        });
    }
}
