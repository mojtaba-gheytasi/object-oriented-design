<?php

namespace App\Sample\OCP;

class GenericEncoder
{
    private EncoderFactory $encoderFactory;

    public function __construct(EncoderFactory $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function encode($data, string $format): string
    {
        $encoder = $this->encoderFactory->createEncoder($format);

        return $encoder->encode($data);
    }
}