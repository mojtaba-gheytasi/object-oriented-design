<?php

namespace App\FactoryMethod\ContentPublisher;

class Message
{
    private string $title;

    private string $content;

    private string $image;

    # immutable object are better than mutable :)
    public function __construct(string $title, string $content, string $image)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}