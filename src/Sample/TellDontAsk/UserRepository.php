<?php

namespace App\Sample\TellDontAsk;

class UserRepository
{
    public function find(int $id): User
    {
        return new User;
    }
}