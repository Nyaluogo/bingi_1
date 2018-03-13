<?php

namespace Nyabingi\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Nyabingi\User;
use Nyabingi\Post;
use Nyabingi\Friendship;

class NewFollower extends Notification implements ShouldQueue
{
    use Queueable;

    private $follower;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($follower)
    {
        //
        $this->follower = User::find($follower);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) : array
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
                    ->line($this->follower->name .'Just followed you.')
                    ->action('view', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable) : array
    {
        return [ 
            'follower_name' => $this->follower->name,
            'follower_id' => $this->follower->id,
            'follower_avatar' => $this->follower->avatar,
            
        ];
    }
}
