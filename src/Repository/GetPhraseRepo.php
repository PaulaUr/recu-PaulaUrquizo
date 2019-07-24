<?php

namespace Paula\TestingProject\Repository;


interface GetPhraseRepo
{
    public function getPhrase();

    public function addPhrase($phrase);

}
