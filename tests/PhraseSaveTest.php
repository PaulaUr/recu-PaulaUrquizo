<?php

declare(strict_types = 1);


namespace Paula\TestingProjectTest;

use Paula\TestingProject\Application\FinderPhrase;
use Paula\TestingProject\Infrastructure\InMemoryGetPhraseRepository;
use Paula\TestingProjectTest\Stub\PhraseValidStub;
use PHPUnit\Framework\TestCase;
use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProject\Repository\GetPhraseRepo;
use Mockery;




final class PhraseSaveTest extends TestCase
{
    /**
     * @test
     */
    public function shouldSavePhrase()
    {
        $repo = new InMemoryGetPhraseRepository();
        $phrase = 'Testing the save implementation';

        $repo->addPhrase($phrase);
        $result = $repo->search($phrase);
        $this->assertIsArray($result);
        $this->assertNotNull($result);
    }
}