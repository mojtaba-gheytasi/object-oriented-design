<?php

namespace App\FactoryMethod\ContentPublisher\Creator;

use App\FactoryMethod\ContentPublisher\Creator\Contract\MessagePublisher;
use App\FactoryMethod\ContentPublisher\Drivers\InstagramPublisher;
use App\FactoryMethod\ContentPublisher\Drivers\Contract\Publisher;

class InstagramPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): Publisher
    {
        return new InstagramPublisher();
    }
}