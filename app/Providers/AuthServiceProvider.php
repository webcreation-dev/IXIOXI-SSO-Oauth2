<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Models\User;

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

        if (!$this->app->routesAreCached()) {
            Passport::routes();
        }
        Passport::tokensExpireIn(now()->addDays(1));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));

        Passport::tokensCan([
            'view-user' => "Afficher les informations sur l'utilisateur"
        ]);


        Gate::define("crm", function(User $user) {
            return $user->hasRole("crm");
        });
        
        Gate::define("cachet", function(User $user) {
            return $user->hasRole("cachet");
        });

        // Gate::after(function(User $user) {
        //     return $user->hasRole("admin");
        // });

        Gate::before(function (User $user) {
            if ($user->hasRole("admin")) {
                return true;
            }
        });
    }
}
