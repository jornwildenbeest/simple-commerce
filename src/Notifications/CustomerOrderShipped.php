<?php

namespace DoubleThreeDigital\SimpleCommerce\Notifications;

use DoubleThreeDigital\SimpleCommerce\Contracts\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Statamic\Facades\Site;

class CustomerOrderShipped extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(protected Order $order)
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [
            'mail',
        ];
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
            ->subject(config('app.name') . ': Order Confirmation')
            ->markdown('simple-commerce::emails.customer_order_shipped', [
                'order' => $this->order,
                'site' => Site::current(),
            ]);
    }
}
