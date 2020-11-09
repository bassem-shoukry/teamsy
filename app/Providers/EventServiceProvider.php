<?php

namespace App\Providers;

use App\Listeners\SetTenantIdInSession;
use App\Listeners\UnsetTenantIdFromSession;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

//        Login::class =>[
//            SetTenantIdInSession::class
//        ]

        'Illuminate\Auth\Events\Login' => [
            SetTenantIdInSession::class
        ],

        'Illuminate\Auth\Events\Logout' => [
            UnsetTenantIdFromSession::class
        ],


    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
