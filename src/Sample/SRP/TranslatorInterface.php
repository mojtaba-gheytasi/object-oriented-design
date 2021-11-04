<?php

namespace App\Sample\SRP;

interface TranslatorInterface
{
    public function translate(string $text): string;
}