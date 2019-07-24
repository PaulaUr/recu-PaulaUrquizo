<?php

require 'vendor/autoload.php';


use Paula\TestingProject\Application\AddPhrase;
use Paula\TestingProject\Domain\RandomPhrase;
use Paula\TestingProject\Infrastructure\ApiClientRepo;
use Paula\TestingProject\Infrastructure\InMemoryGetPhraseRepository;
use Paula\TestingProject\Repository\GetPhraseRepo;



$phrase = new RandomPhrase(new InMemoryGetPhraseRepository());
$randomPhrase =  $phrase->__invoke();
$phrase->savePhrases($randomPhrase);
echo $randomPhrase;


