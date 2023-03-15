<?php

namespace App\Providers;

use App\Listeners\LogUnknownFeatureUsage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Laravel\Pennant\Events\FeatureResolved;
use Laravel\Pennant\Events\UnknownFeatureResolved;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // the feature events
        FeatureResolved::class => [
            // log the feature usage for analytics
        ],
        UnknownFeatureResolved::class => [
            // do some alerting, this is a feature which is not recognized by the system
            LogUnknownFeatureUsage::class
        ]
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

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
