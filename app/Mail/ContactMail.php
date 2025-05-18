<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Obter o envelope da mensagem.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
     public function envelope()
     {
         return new Envelope(
             subject: 'E-Mail de contato',
         );
     }

    /**
     * Obter a definição do conteúdo da mensagem.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.contact',
        );
    }

    /**
     * Obter os anexos para a mensagem.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
