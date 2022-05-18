<?php

namespace App\FactoryMethod\ContentPublisher\Creator;

use App\FactoryMethod\ContentPublisher\Creator\Contract\MessagePublisher;
use App\FactoryMethod\ContentPublisher\Drivers\LinkedInPublisher;
use App\FactoryMethod\ContentPublisher\Drivers\Contract\Publisher;

class LinkedInPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): Publisher
    {
        return new LinkedInPublisher();
    }
}