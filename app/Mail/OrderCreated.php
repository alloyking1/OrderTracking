<?php

namespace App\Mail;
use App\Delivery;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $delivery;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Delivery $delivery)
    {
        //Import data from 
        $this->delivery = $delivery;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('mail.OrderCreatedView')->with($this->delivery);
        return $this->view('mail.OrderCreatedView')->with([
            'Rname' => $this->delivery->RFullName,
            'TrackingCode' => $this->delivery->tracking_num,
        ]);
        // return $this->view('mail.OrderCreatedView');
    }
}
