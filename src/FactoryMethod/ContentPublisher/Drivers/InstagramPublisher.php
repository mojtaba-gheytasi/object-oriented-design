<?php

namespace App\FactoryMethod\ContentPublisher\Drivers;

use App\FactoryMethod\ContentPublisher\Drivers\Contract\Publisher;
use App\FactoryMethod\ContentPublisher\Message;

class InstagramPublisher implements Publisher
{
    public function publish(Message $message): void
    {
        echo sprintf(
            'Publish in Instagram -> title: %s - content: %s',
            $message->getTitle(),
            $message->getContent()
        );
    }
}