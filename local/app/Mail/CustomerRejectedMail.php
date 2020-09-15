<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
        // pr($this->details);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.CustomerRejectedMail')
                    ->with([
                        'fname' => $this->details['f_name'],
                        'lname' => $this->details['l_name'],
                        'status' => $this->details['status'],
                        'remark' => $this->details['remark'],
                    ]);
    }
}
