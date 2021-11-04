<?php

namespace App\Sample\OCP;

class EncoderFactory
{
    public function createEncoder(string $format): EncoderInterface
    {
        if ($format === 'json') {
            $encoder = new JsonEncoder();
        } elseif ($format === 'xml') {
            $encoder = new XmlEncoder();
        } else {
            throw new \InvalidArgumentException('Unknown format');
        }

        return $encoder;
    }
}