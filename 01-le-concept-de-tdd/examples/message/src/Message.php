<?php

namespace App;

class Message
{
    public function __construct(
        private string $lang = 'en',
        private array $transaltions = ['fr' => 'Bonjour les gens!', 'en' => 'Hello World!']
    )
    {
    }

    public function get(): string
    {
        return $this->transaltions[$this->lang];
    }

    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }
}
