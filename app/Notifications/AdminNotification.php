<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNotification extends Notification
{
    use Queueable;

    protected $message;
    protected $detailsUrl; // Optionnel : pour un lien vers plus de détails

    /**
     * Create a new notification instance.
     *
     * @param  string  $message
     * @param  string|null  $detailsUrl
     * @return void
     */
    public function __construct(string $message, ?string $detailsUrl = null)
    {
        $this->message = $message;
        $this->detailsUrl = $detailsUrl;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database']; // Nous allons stocker la notification dans la base de données
        // Vous pouvez ajouter d'autres canaux ici si vous voulez aussi envoyer un e-mail, etc.
        // return ['database', 'mail'];
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
            'message' => $this->message,
            'details_url' => $this->detailsUrl, // Optionnel
            'created_at' => now()->toDateTimeString(),
            // Vous pouvez ajouter d'autres données pertinentes ici
        ];
    }

    // Si vous aviez inclus 'mail' dans la méthode via(), vous auriez aussi besoin de la méthode toMail():
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->subject('Nouvelle Notification Administrateur')
    //                 ->line($this->message)
    //                 ->action('Voir les Détails', $this->detailsUrl)
    //                 ->line('Merci de votre attention !');
    // }
}
