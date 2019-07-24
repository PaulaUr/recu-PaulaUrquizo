<?php
declare(strict_types = 1);

namespace Paula\TestingProjectTest\Mock;


use Paula\TestingProject\Repository\GetPhraseRepo;

final class InMemoryPhraseRepoMock implements GetPhraseRepo
{

    public function getPhrase()
    {
        return [
            'Hey!'
        ];
    }

    public function addPhrase($phrase)
    {
        return;
    }
}