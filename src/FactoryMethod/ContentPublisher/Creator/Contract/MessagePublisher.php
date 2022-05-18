<?php

namespace App\FactoryMethod\ContentPublisher\Creator\Contract;

use App\FactoryMethod\ContentPublisher\Drivers\Contract\Publisher;
use App\FactoryMethod\ContentPublisher\Message;

abstract class MessagePublisher
{
    public function publish(Message $message)
    {
        $publisher = $this->createPublisher();
        $publisher->publish($message);
    }

    abstract protected function createPublisher(): Publisher;
}