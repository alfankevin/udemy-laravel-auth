<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public static $permissions = [
        'index-user' => ['admin'],
    ];

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::before(
            function (User $user) {
                if ($user->role === 'superadmin') {
                    return true;
                }
            }
        );

        foreach (self::$permissions as $permission => $roles) {
            Gate::define(
                $permission,
                function (User $user) use ($roles) {
                    if(in_array($user->role, $roles)) {
                        return true;
                    }
                }
            );
        }
    }
}
