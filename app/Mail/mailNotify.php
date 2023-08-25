<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }



    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function build()
    {
        // return $this->from('3bodynasser72@gmail.com', 'send email test')->
        // subject($this->data['subject'])->
        // view('emails.index')->with('data', $this->data);

        return $this->view('emails.index');
    }
}
