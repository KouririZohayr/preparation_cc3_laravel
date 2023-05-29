<?php

namespace App\Listeners;

use App\Events\ajouteEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class SendEmailforAdd
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
    public function handle(ajouteEvent $event): void
    {
        $userEmail=Auth::user()->email ;
        Mail::to($userEmail)->send(new OrderShipped($event->article));
    }
}
