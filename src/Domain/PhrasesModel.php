<?php

declare(strict_types = 1);


namespace Paula\TestingProject\Domain;


final class PhrasesModel
{
    private $phrase;


    public function __construct(string $phrase)
    {
        $this->phrase = $phrase;
    }

    public static function savePhrases(string $phrase)
    {
        return new self($phrase);
    }

    public function getPhrase(): string
    {
        return $this->phrase;
    }


    public function setPhrase(string $phrase)
    {
        $this->phrase = $phrase;
    }

    

}
