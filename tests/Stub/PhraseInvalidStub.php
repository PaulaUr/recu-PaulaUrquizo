<?php
/**
 * Created by IntelliJ IDEA.
 * User: pauli
 * Date: 25/07/2019
 * Time: 23:12
 */

namespace Paula\TestingProjectTest\Stub;


use Paula\TestingProject\Repository\GetPhraseRepo;

final class PhraseInvalidStub implements GetPhraseRepo
{

    public function getPhrase():array
    {
        return[];
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
