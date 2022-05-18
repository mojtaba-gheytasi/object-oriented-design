<?php

namespace App\FactoryMethod\ContentPublisher\Drivers\Contract;

use App\FactoryMethod\ContentPublisher\Message;

interface Publisher
{
    public function publish(Message $message): void;
}