<?php

declare(strict_types = 1);

namespace Paula\TestingProjectTest;


use Mockery;
use Paula\TestingProject\Application\AddPhrase;
use Paula\TestingProject\Domain\PhrasesModel;
use Paula\TestingProject\Infrastructure\InMemoryGetPhraseRepository;
use Paula\TestingProjectTest\Dummy\PhraseRepoDummy;
use Paula\TestingProjectTest\Fake\InMemoryPhraseFake;
use Paula\TestingProjectTest\ObjectMother\PhraseMother;
use PHPUnit\Framework\TestCase;

final class AddPhraseTest extends TestCase
{
    /** @test */
    public function shouldAdderSentence()
    {
        $this->expectException(\Exception::class);
        $repository =  Mockery::mock(InMemoryGetPhraseRepository::class);
        $creator = new AddPhrase($repository);

        $sentence = PhraseRepoDummy::random();
        $this->repository
            ->shouldReceive('addPhrase')
            ->once()
            ->andReturnNull();
        $this->assertInstanceOf(PhrasesModel::class, $sentence);

    }
//
//    /** @test */
//    public function phrase()
//    {
//        $repo = new InMemoryGetPhraseRepository();
//        $phrase = PhraseMother::random();
//        $repo->addPhrase($phrase);
//
//        $findPhrase = $repo->findPhrase($phrase->getPhrase());
//        $this->assertInstanceOf(PhrasesModel::class, $findPhrase);
//    }
}