<?php

namespace carsadmin\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    const SENDER_EMAIL = 'admin@carsadmin.com';
    const SENDER_NAME  = 'CarsAdmin System';

    public $data = '';
    public $subject = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $subject = 'NUEVO PEDIDO')
    {
        $this->data = $data;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.order')
                ->from(self::SENDER_EMAIL, self::SENDER_NAME)
                ->subject($this->subject);
    }
}
