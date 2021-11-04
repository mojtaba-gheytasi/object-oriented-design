<?php

namespace App\Sample\OCP;

interface EncoderInterface
{
    public function encode($data): string;
}