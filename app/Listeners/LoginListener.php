<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class LoginListener
{
    /**
     * Create the event listener.
     */
    public $email;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LoginEvent $event)
    {
    $this->email=$event->data->email;
     Mail::raw('You have successfully Loggedin', function ($message) {
       
         $message->to($this->email);
         $message->subject('Subject');

     });
    
    }
}
