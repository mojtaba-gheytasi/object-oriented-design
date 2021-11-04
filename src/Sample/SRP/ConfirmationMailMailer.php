<?php

namespace App\Sample\SRP;

class ConfirmationMailMailer
{
    private ConfirmationMailFactory $mailFactory;

    private MailerInterface $mailer;

    public function __construct(
        MailerInterface $mailer,
        ConfirmationMailFactory $mailFactory
    ) {
        $this->mailFactory = $mailFactory;
        $this->mailer = $mailer;
    }

    public function sendTo(User $user): void
    {
        $message = $this->createMessageFor($user);

        $this->sendMessage($message);
    }

    private function createMessageFor(User $user): Message
    {
        return $this->mailFactory->createMessageFor($user);
    }

    private function sendMessage(Message $message): void
    {
        $this->mailer->send($message);
    }
}