<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Upload' => 'App\Policies\UploadPolicy',
        'App\Models\Post' => 'App\Policies\PostPolicy', // Bind Post model to its policy
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Define a global Gate
        Gate::define('admin-only', function ($user) {
            return $user->is_admin; // Allow access only for admins
        });

        // Register dynamic policies
        foreach (config('permissions.dynamic_policies', []) as $model => $policy) {
            Gate::policy($model, $policy);
        }

        // Default policy: grant all permissions for super administrators
        Gate::before(function ($user, $ability) {
            if ($user->is_super_admin) {
                return true; // Super administrators have all permissions
            }
        });
    }
}
