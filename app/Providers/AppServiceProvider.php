<?php

namespace App\Providers;

use App\View\Components\Button;
use App\View\Components\Indexpage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(190);
        $this->loadViewComponentsAs('front' , [
            Button::class,
            Pricingpage::class,
            Coursespage::class,
            Slidbar::class,
            Indexpage::class
        ]);
    }
}
