<?php

namespace App\Sample\SRP;

interface MailerInterface
{
    public function send(Message $message);
}