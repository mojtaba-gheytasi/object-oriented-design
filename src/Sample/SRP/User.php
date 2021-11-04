<?php

namespace App\Sample\SRP;

class User
{
    public function getConfirmationCode(): string
    {
        return 'code';
    }

    public function getEmailAddress(): string
    {
        return 'email';
    }

    public function getName(): string
    {
        return 'name';
    }
}