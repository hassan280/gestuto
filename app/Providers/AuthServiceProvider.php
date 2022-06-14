<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies(); 
          Gate::define('manage-create_classes', function ($user) {
            return ($user->type == 1);
        });
        Gate::define('delete-classroom', function ($user) {
            return ($user->type == 1);
        });
        Gate::define('update-classroom', function ($user) {
            return ($user->type == 1);
        });

        Gate::define('manage-courses', function ($user) {
            return ($user->type == 1);
        });
        Gate::define('add-subject', function ($user) {
            return ($user->type == 1 || $user->type == 2  );
        });

        Gate::define('manage-lessons', function ($user) {
            return ($user->type == 2);
        });
        Gate::define('manage_classroom', function ($user) {
            return ($user->type == 1 || $user->type == 2  );
        });

        Gate::define('manage-join_classes', function ($user) {
            return ($user->type == 2);
        });


     
     
    }
}
