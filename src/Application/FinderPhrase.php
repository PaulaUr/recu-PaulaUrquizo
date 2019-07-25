<?php

namespace Paula\TestingProject\Application;


use Paula\TestingProject\Exception\EmptyArrayException;
use Paula\TestingProject\Repository\GetPhraseRepo;

final class FinderPhrase
{
    private $repository;

    public function __construct(GetPhraseRepo $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($phrase)
    {
        $sentences = $this->repository->search($phrase);

        if (empty($sentences)) {
            throw new EmptyArrayException();
        }

        return $sentences;
    }
}