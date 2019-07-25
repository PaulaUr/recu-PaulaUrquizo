<?php

declare(strict_types = 1);

namespace Paula\TestingProjectTest;


use Mockery;
use Paula\TestingProject\Application\AddPhrase;
use Paula\TestingProject\Domain\PhrasesModel;
use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProject\Exception\EmptyArrayException;
use Paula\TestingProject\Infrastructure\InMemoryGetPhraseRepository;
use Paula\TestingProjectTest\Dummy\PhraseRepoDummy;
use Paula\TestingProjectTest\Fake\InMemoryPhraseFake;
use Paula\TestingProjectTest\ObjectMother\PhraseMother;
use Paula\TestingProjectTest\Stub\PhraseInvalidStub;
use Paula\TestingProjectTest\Stub\PhraseValidStub;
use PHPUnit\Framework\TestCase;

final class VerifyPhraseUsingStubTest extends TestCase
{
    /** @test */
    public function shouldVerifyAdderSentence()
    {
        $wordRepository = new PhraseValidStub();
        $randomPhrases = new RandomPhrase($wordRepository);

        $phrase = $randomPhrases();

        $this->assertContains($phrase, ['PhraseThree']);

    }

    /** @test */
    public function shouldThrowExceptionWhenPhraseInvalid()
    {
        $this->expectException(EmptyArrayException::class);

        $wordRepository = new PhraseInvalidStub();
        $randomPhrases = new RandomPhrase($wordRepository);

        $randomPhrases();
    }

}