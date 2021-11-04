<?php

namespace App\Sample\TellDontAsk;

class User
{
    private int $id;

    private string $name;

    private int $walletCredit;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWalletCredit(): string
    {
        return $this->walletCredit;
    }

    public function setWalletCredit(int $amount): void
    {
        $this->walletCredit = $amount;
    }
}