<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Doctor1Mail extends Mailable
{
    use Queueable, SerializesModels;
public $data;
public $image;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data , $image)
    {
        $this->data =$data;
        $this->image =$image;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'الإستشارة',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
        view:'emails.doctor1',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
           (public_path('uploads/doctors/'.$this->image)),
        ];
    }
}
