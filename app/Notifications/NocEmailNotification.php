<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NocEmailNotification extends Notification
{
    use Queueable;
    private $NocMessage;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($NocMessage)
    {
        $this->NocMessage = $NocMessage;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line($this->NocMessage['name'])
                    ->line($this->NocMessage['body'])
                    ->action($this->NocMessage['text'], $this->NocMessage['url'])
                    ->line($this->NocMessage['thanks']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'noc_id' => $this->NocMessage['noc_id']
        ];
    }
}
