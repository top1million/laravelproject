<?php

namespace App\Events;

use App\Http\Models\Car;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CarEvents
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public Car $car;
    /**
     * Create a new event instance.
     */
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
