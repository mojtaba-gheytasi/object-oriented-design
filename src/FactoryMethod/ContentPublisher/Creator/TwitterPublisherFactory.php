<?php

namespace App\FactoryMethod\ContentPublisher\Creator;

use App\FactoryMethod\ContentPublisher\Creator\Contract\MessagePublisher;
use App\FactoryMethod\ContentPublisher\Drivers\TwitterPublisher;
use App\FactoryMethod\ContentPublisher\Drivers\Contract\Publisher;

class TwitterPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): Publisher
    {
        return new TwitterPublisher();
    }
}