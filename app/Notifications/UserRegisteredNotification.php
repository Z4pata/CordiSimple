<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\URL;
use App\Models\User;

class UserRegisteredNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(15),
            ['id' => $notifiable->id, 'hash' => sha1($notifiable->email)]
        );
    
        return (new MailMessage)
            ->subject('Registration Successful')
            ->greeting("Hello, {$notifiable->name}")
            ->line('Thank you for registering with us!')
            ->line('We are excited to have you on board.')
            ->action('Verify your account', route('verification.verify', [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]))
            ->line("If you have any questions, please don’t hesitate to contact us.")
            ->from('cordisimpleriwi@gmail.com', 'CordiSimple');
    }
    
}
