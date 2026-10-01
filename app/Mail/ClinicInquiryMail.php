<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClinicInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $inquiry;

    public function __construct(array $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    public function build()
    {
        return $this
            ->subject(
                'OTC3 Clinic Inquiry - ' .
                $this->inquiry['organization_name']
            )
            ->replyTo(
                $this->inquiry['email'],
                $this->inquiry['name']
            )
            ->view('emails.clinic-inquiry');
    }
}