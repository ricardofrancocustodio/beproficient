<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactForm extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$this->from($this->user->email);
        //dd($request);

        $this->subject('llalalalalalalal');
        //$this->subject('Novo contato' );
        $this->to($this->user->email, $this->user->name);
        
        return $this->markdown('mail.contactForm', ['user' => $this->user]);
        //return $this->view('mail.contactForm', ['user' => $this->user]);
    }
}
