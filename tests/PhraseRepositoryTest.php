<?php

declare(strict_types = 1);

namespace Paula\TestingProjectTest;

use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProject\Infrastructure\InMemoryGetPhraseRepository;
use Paula\TestingProjectTest\Fake\InMemoryPhraseFake;
use PHPUnit\Framework\TestCase;

final class PhraseRepositoryTest extends TestCase
{
    /** @test */
    public function shouldReturnPhraseOne()
    {
       $repo = new InMemoryPhraseFake();
       $randomPhrases = new RandomPhrase($repo);
       $result = $randomPhrases();
        $this->assertEquals('PhraseOne', $result);
        $this->assertNotEquals('Phrases', $result);
    }

    /**
     * @test
     */
    public function shouldShowPhraseArrayNotEmpty()
    {
        $repository =  new InMemoryPhraseFake();
        $result = $repository->getPhrase();
        $this->assertNotEmpty($result);
        $this->assertIsArray($result);
        $this->assertNotNull($result);
    }

    /**
     * @test
     */
    public function wordArrayShouldReturnStrings()
    {
        $wordRepository = new InMemoryGetPhraseRepository();

        $result = $wordRepository->getPhrase();

        $this->assertTrue(gettype($result[0]) === 'string');
    }

    /**
     * @test
     */
    public function colorRepositoryShouldReturnANotEmptyColorArray()
    {
        $colorRepository = new InMemoryGetPhraseRepository();

        $result = $colorRepository->getPhrase();

        $this->assertNotNull($result);
        $this->assertTrue(gettype($result) === 'array');
        $this->assertNotEmpty($result);
    }
}
