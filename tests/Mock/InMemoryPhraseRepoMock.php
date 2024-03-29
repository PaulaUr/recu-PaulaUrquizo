<?php
declare(strict_types = 1);

namespace Paula\TestingProjectTest\Mock;


use Paula\TestingProject\Repository\GetPhraseRepo;
use Paula\TestingProject\Repository\GetPhraseRepoTest;

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

    public function search($phrase): array
    {
        $sentences = $this->getPhrase();
        return isset($sentences[$phrase]) ? $sentences[$phrase] : [];
    }
}