<?php

namespace Paula\TestingProjectTest\Fake;


use Paula\TestingProject\Domain\PhrasesModel;
use Paula\TestingProject\Repository\GetPhraseRepo;

class InMemoryPhraseFake implements GetPhraseRepo
{

    private $list = [];

    public function getPhrase():array
    {
        return[
            'PhraseOne'
        ];
    }

    public function addPhrase($phrase)
    {
        return;
    }

    public function findPhrase(string $phrase): PhrasesModel
    {
        return $this->list[$phrase] ?? null;
    }
}
