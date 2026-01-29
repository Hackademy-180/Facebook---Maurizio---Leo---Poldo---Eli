<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address as MailablesAddress;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie per esserti iscritto alla newsletter',
            from: new MailablesAddress('UglyBook@aulab.it')
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.newsletter-mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
