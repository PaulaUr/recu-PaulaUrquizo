<?php

namespace Paula\TestingProjectTest\Spy;


use Paula\TestingProject\Repository\GetPhraseRepo;

final class PhraseRepoSpy implements GetPhraseRepo
{
    public $hasBeenCalledPublish = false;

    public function getPhrase()
    {
      $this->hasBeenCalledPublish = true;
      return true;
    }

    public function addPhrase($phrase)
    {
        $this->hasBeenCalledPublish = true;
        return true;
    }

    public function search($phrase): array
    {
        $this->hasBeenCalledPublish = true;
        return ['true'];
    }
}
