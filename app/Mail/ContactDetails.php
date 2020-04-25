<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactDetails extends Mailable
{
    use Queueable, SerializesModels;
    public $array_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($array_data)
    {
        $this->array_data = $array_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->subject("Contact Details")->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"))->view('mail.contact');
    }
}
