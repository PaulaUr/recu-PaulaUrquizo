<?php

declare(strict_types = 1);

namespace Paula\TestingProjectTest;

use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProjectTest\Fake\InMemoryPhraseFake;
use PHPUnit\Framework\TestCase;

final class GetPhraseFakeTest extends TestCase
{


    public function tearDown()
    {
        parent::tearDown();

    }

    /** @test */
    public function shouldReturnPhraseFake()
    {
       $repo = new InMemoryPhraseFake();
       $randomPhrases = new RandomPhrase($repo);
        $this->assertEquals('PhraseOne', $randomPhrases->__invoke());
        $this->assertNotEquals('Phrases', $randomPhrases->__invoke());
    }

    /**
     * @test
     */
    public function shouldShowPhraseArrayNotEmptyFake()
    {
        $repository =  new InMemoryPhraseFake();
        $result = $repository->getPhrase();
        $this->assertNotEmpty($result);
        $this->assertIsArray($result);
    }
}
