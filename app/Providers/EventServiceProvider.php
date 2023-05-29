<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ajouteEvent;
use App\Listeners\SendEmailforAdd;
use App\Events\suppEvent;
use App\Listeners\SendEmailforSupp;
use App\Events\updateEvent;
use App\Listeners\SendEmailforupdate;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ajouteEvent::class => [
            SendEmailforAdd::class,
        ],
        suppEvent::class => [
            SendEmailforSupp::class,
        ],
        updateEvent::class => [
            SendEmailforupdate::class,
        ]



    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
