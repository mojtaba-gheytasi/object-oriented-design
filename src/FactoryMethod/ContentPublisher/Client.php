<?php

namespace App\FactoryMethod\ContentPublisher;

use App\FactoryMethod\ContentPublisher\Creator\MessagePublisher;

class Client
{
    private MessagePublisher $publisher;

    # Should bind a concrete creator (InstagramPublisherFactory|LinkedInPublisherFactory|TwitterPublisherFactory)
    # to abstract creator (MessagePublisher) in service container
    public function __construct(MessagePublisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function publishMessage()
    {
        $message = new Message(
            'title',
            'content',
            'path/to/image.jpeg'
        );

        $this->publisher->publish($message);
    }
}