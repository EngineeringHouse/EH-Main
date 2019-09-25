<?php

namespace App\Events;

use App\Module;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ModuleChange implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomNumber;

    public $changedModule;

    public function __construct(Module $changedModule, $roomNumber)
    {
        $this->changedModule = $changedModule;
        $this->roomNumber = $roomNumber;
    }

    public function broadcastOn()
    {
        return new Channel('rooms');
    }
}
