<?php

namespace App\Providers;

use Illuminate\Auth\Access\Response;
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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('delete-permission',function($user){
            return($user->sebagai =='owner'
                    ? Response::allow()
                    : Response::deny("You must be a super administrator"));
        });

        Gate::define('delete-product',function($user){
            return($user->sebagai =='owner'
                    ? Response::allow()
                    : Response::deny("Tidak diijinkan untuk menghapus data produk ini"));
        });

        Gate::define('change-medicine',function($user){
            return($user->sebagai =='owner'
                    ? Response::allow()
                    : Response::deny("Tidak diijinkan untuk mengubah data ini"));
        });

        Gate::define('checkmember',function($user){
            return($user->sebagai =='member'
                    ? Response::allow()
                    : Response::deny("Anda harus menjadi member terlebih dahulu"));
        });
    }
}
