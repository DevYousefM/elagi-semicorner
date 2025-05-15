<?php
namespace App\Listeners;

use App\Events\OrderCreated;
use App\Models\Notification;

class SendOrderNotification
{
    public function handle(OrderCreated $event)
    {
        $order = $event->order;
        $message = "A new order has been placed with total: {$order->total_price}";
        // Dynamically add new details if present
        if (isset($order->new_column)) {
            $message .= " and additional info: {$order->new_column}";
        }

        Notification::create([
            'type' => 'New Order',
            'message' => $message,
            'user_id' => $order->user_id // Assuming you have a user relationship
        ]);
    }
}
