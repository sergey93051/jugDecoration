<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Orderinfo extends Mailable
{
    use Queueable, SerializesModels;
    public $newmess;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sentmess)
    {
        $this->newmess = $sentmess;
    }

    /** 
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.orderbuyinfo')
            ->with([
                "prod" => $this->newmess['prod'],
                "price" => $this->newmess['price'],
                "total" => $this->newmess['total']
            ]);
    }
}
