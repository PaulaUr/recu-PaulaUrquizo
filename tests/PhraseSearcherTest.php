<?php
declare(strict_types = 1);


namespace Paula\TestingProjectTest;

use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProject\Repository\GetPhraseRepo;
use Paula\TestingProjectTest\Dummy\PhraseRepoDummy;
use PHPUnit\Framework\TestCase;


final class PhraseSearcherTest extends TestCase
{

    /**
     * @test
     */
    public function shouldReturnAWordAndItShouldBePhraseTwo()
    {
        $phraseRepo = $this->getMockBuilder(GetPhraseRepo::class)
                            ->getMock();
        $phraseRepo->expects($this->any())
                             ->method('getPhrase')
                             ->willReturn(['PhraseTwo']);
        $randomPhrase = new RandomPhrase($phraseRepo);

        $result = $randomPhrase();

        $this->assertNotNull($result);
        $this->assertEquals('PhraseTwo',$result);
    }
}