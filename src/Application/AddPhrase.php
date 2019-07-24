<?php
declare(strict_types = 1);

namespace Paula\TestingProject\Application;


use Paula\TestingProject\Domain\PhrasesModel;
use Paula\TestingProject\Repository\GetPhraseRepo;

final class AddPhrase
{
    private $repo;

    /**
     * AddPhrase constructor.
     * @param $repo
     */
    public function __construct(GetPhraseRepo $repo)
    {
        $this->repo = $repo;
    }

    public function __invoke(string $sentence)
    {
        $this->repo->addPhrase($sentence);
    }


}