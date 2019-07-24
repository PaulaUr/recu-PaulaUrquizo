<?php

namespace Paula\TestingProjectTest\Dummy;


use Paula\TestingProject\Repository\GetPhraseRepo;

class PhraseRepoDummy implements GetPhraseRepo
{

    public function getPhrase()
    {
        return null;
    }

    public function addPhrase($phrase)
    {
        return;
    }
}
