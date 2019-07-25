<?php
declare(strict_types = 1);

namespace Paula\TestingProjectTest\Stub;


use Paula\TestingProject\Repository\GetPhraseRepo;
use Paula\TestingProject\Repository\GetPhraseRepoTest;

final class PhraseValidStub implements GetPhraseRepo
{

    public function getPhrase():array
    {
        return[
            'PhraseThree'
        ];
    }

    public function addPhrase($phrase)
    {
        return;

    }

    public function search($phrase): array
    {
        return[];
    }
}