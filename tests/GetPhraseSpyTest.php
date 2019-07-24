<?php
declare(strict_types = 1);

namespace Paula\TestingProjectTest;

use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProjectTest\Dummy\PhraseRepoDummy;
use Paula\TestingProjectTest\Fake\InMemoryPhraseFake;
use Paula\TestingProjectTest\Spy\PhraseRepoSpy;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\TestCase;


final class GetPhraseSpyTest extends TestCase
{
    /**
     * @test
     */
    public function it_shouldShowPhrasesUsingSpy()
    {
        //$this->expectException(\Exception::class);

        $repository =  new InMemoryPhraseFake();

        $phraseRepo = new PhraseRepoDummy();
        $phraseRepoSpy = new PhraseRepoSpy();
        $phraseGetAll = new RandomPhrase($phraseRepoSpy);

        $this->assertTrue($phraseRepoSpy->getPhrase());


    }
}