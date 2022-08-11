<?php

namespace Naftalivo\EmailContact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name)
    {
        //
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emailcontact::emailcontact.email')
        ->with(['message' => $this->message, 'name' => $this->name]);
    }
}
