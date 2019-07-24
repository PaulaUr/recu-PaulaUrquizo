<?php


namespace Paula\TestingProjectTest\ObjectMother;


use Paula\TestingProject\Domain\PhrasesModel;
use Faker\Factory;

class PhraseMother
{

    public static function create(PhrasesModel $phrase)
    {
        return new PhrasesModel($phrase);
    }
    public static function random(): PhrasesModel
    {
        $faker = Factory::create();
        return new PhrasesModel($faker->sentence);
    }

    public static function addPhrase(string $phrase): PhrasesModel
    {
        $faker = Factory::create();
        return new PhrasesModel($phrase);
    }
}