<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class JobOpportunityMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $emailData;

    /**
     * Create a new message instance.
     * @param array $emailData Data to be used in the email
     */
    public function __construct(array $emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Casting Opportunity – ' . $this->emailData['project_name'] . ' | Apply Now'
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    /**
     * Build the message.
     */
    public function build()
    {
        Log::info('Building JobOpportunityMail with data:', $this->emailData);
        
        return $this->from('info@casttalents.com')
                    ->view('emails.jobs-notify')
                    ->with('data', $this->emailData);
    }
}
