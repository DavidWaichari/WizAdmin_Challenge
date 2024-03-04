<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $age;
    public $experience;
    public $phone;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $age
     * @param int $experience
     * @param string $phone
     */
    public function __construct($name, $age, $experience, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->experience = $experience;
        $this->phone = $phone;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Job Application Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.job_application',
        );
    }

    /**
     * Get the data for the message.
     *
     * @return array
     */
    public function data(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'experience' => $this->experience,
            'phone' => $this->phone,
        ];
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
