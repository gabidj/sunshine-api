<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Laravel\Pennant\Events\UnknownFeatureResolved;

class LogUnknownFeatureUsage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UnknownFeatureResolved $event): void
    {
        Log::warning('Unknown feature [' . $event->feature . '] was used', ['scope' => $event->scope]);
        //
    }
}
