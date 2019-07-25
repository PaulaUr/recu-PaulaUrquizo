<?php

namespace Paula\TestingProject\Domain;


use Paula\TestingProject\Application\AddPhrase;
use Paula\TestingProject\Application\FinderPhrase;
use Paula\TestingProject\Exception\EmptyArrayException;
use Paula\TestingProject\Repository\GetPhraseRepo;


final class RandomPhrase
{
    private $repository;


    public function __construct(GetPhraseRepo $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): string
    {
        $phrases = $this->repository->getPhrase();
        if(empty($phrases))
        {
            throw new EmptyArrayException();
        }

        return $phrases[mt_rand(0, count($phrases) - 1)];
    }

    public function savePhrases($sentence)
    {
        $storage = new AddPhrase($this->repository);

        $storage->__invoke($sentence);
    }

    public function searcherPhrases($sentence)
    {
        $phraseFound = new FinderPhrase($this->repository);

        return $phraseFound->__invoke($sentence);
        
    }

}
