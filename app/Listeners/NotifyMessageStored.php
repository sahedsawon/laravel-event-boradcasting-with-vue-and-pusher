<?php

namespace App\Listeners;

use App\Events\MessageStored;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyMessageStored
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageStored  $event
     * @return void
     */
    public function handle(MessageStored $event)
    {
        //
    }
}
