<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Picqer\Barcode\BarcodeGeneratorHTML;

class DataSubmittedNotification extends Notification
{
    use Queueable;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        // Generate the barcode
        $generatorHTML = new BarcodeGeneratorHTML();
        $barcode = $generatorHTML->getBarcode('0001245259636', $generatorHTML::TYPE_CODE_128);

        return (new MailMessage)
            ->from('your_system_email@example.com', 'Sports_Ticketing_System')
            ->subject('Your Sports Ticket')
            ->view('sports_ticket', [
                'data' => $this->data,
                'logo' => asset('images/logo.png'),
                'barcode' => $barcode,
            ]);
    }
}
