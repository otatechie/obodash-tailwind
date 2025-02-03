<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Discussion;
use App\Policies\DiscussionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
