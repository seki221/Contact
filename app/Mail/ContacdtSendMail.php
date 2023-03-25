<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;
    private $firstname;
    private $lastname;
    private $gender;
    private $email;
    private $address;
    private $postal_code;
    private $opinion;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacts, $type)
    {
        $this->firstname  = $contacts['name'];
        $this->lastname  = $contacts['lastname'];
        $this->gender  = $contacts['gender'];
        $this->email = $contacts['email'];
        $this->address = $contacts['address'];
        $this->address = $contacts['postal_code'];
        $this->opinion = $contacts['opinion'];
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('お問い合わせありがとうございます')
            ->view('emails.urer')
            ->with([
                'firstname' =>$this->firstname,
                'lastname' =>$this->lastname,
                'gender' => $this->gender,
                'email' => $this->email,
                'address' => $this->address,
                'postal_code' => $this->postal_code,
                'messgae' =>$this->opinion,
            
            ]);
    }
}
