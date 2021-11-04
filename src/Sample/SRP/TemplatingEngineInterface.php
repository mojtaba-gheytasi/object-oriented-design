<?php

namespace App\Sample\SRP;

interface TemplatingEngineInterface
{
    public function render(string $template, array $params);
}