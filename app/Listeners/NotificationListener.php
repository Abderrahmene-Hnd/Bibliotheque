<?php

namespace App\Listeners;

use App\Models\Book;
use App\Models\Notification;
use App\Events\NotificationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationListener
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
    public function handle(NotificationEvent $event): void
    {
        // Notification::create([
        //     'name' => $event->book->title,
        //     'content' => $event,
        // ]);
    }
}
