<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;

    // Terima data dari controller
    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesan Baru dari Portfolio: ' . $this->messageData['subject'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}