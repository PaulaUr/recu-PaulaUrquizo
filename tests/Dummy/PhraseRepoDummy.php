<?php

namespace Paula\TestingProjectTest\Dummy;


use Paula\TestingProject\Domain\PhrasesModel;
use Paula\TestingProject\Repository\GetPhraseRepo;

class PhraseRepoDummy implements GetPhraseRepo
{

    public function getPhrase(): PhrasesModel
    {
        return null;
    }

    public function addPhrase($phrase)
    {
        return;
    }

    public function search($phrase): array
    {
        return [];
    }
}
