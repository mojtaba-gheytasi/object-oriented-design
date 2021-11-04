<?php

namespace App\Sample\SRP;

class Message
{
    private string $subject;
    
    private string $body;
    
    private string $email;

    public function __construct(string $subject, string $body, string $email)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->email = $email;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}