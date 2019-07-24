<?php

declare(strict_types = 1);


namespace Paula\TestingProject\Infrastructure;


use Paula\TestingProject\Domain\PhrasesModel;
use Paula\TestingProject\Repository\GetPhraseRepo;

final class InMemoryGetPhraseRepository implements GetPhraseRepo
{
    private $filePath;
    private $list = [];


    /**
     * InMemoryGetPhraseRepository constructor.
     */
    public function __construct()
    {
        $this->filePath = __DIR__ . '/../../database/sentences_database.json';

    }

    public function getPhrase()
    {
        return [
            'Goofy Elizabeth Warren has been one of the least effective Senators in the entire U.S. Senate. She has done nothing!',
            'Crooked Hillary Clinton said she is used to \"dealing with men who get off the reservation.\" Actually, she has done poorly with such men!',
            'Tom Ridge should be focused on trying to bring the party together rather than ripping it apart w/ your faulty thought process. I will win!',
            'Rick Perry failed on the border. He should be forced to take an IQ test before being allowed to enter the GOP debate.',
            'George E. Pataki  could not be elected dog catcher if he ran again—so he did not!',
            'Ted Cruz purposely, and illegally, did not list on his personal disclosure form personally guaranteed loans from banks. They own him!',
            'Fox News is devastated that lightweight Senator Marco Rubio got trounced tonight and is the big loser. I won the two big states, great!'
        ];    }

    public function addPhrase($phrase)
    {
       // $phrase = $this->getPhrase();
        $this->saveAll($phrase);

    }

    private function saveAll($sentences)
    {
        // $jsonEncode = json_encode($sentences .PHP_EOL);
        return file_put_contents($this->filePath , json_encode($sentences .PHP_EOL), FILE_APPEND | LOCK_EX);
    }

    public function findPhrase(string $phrase): PhrasesModel
    {
        return $this->list[$phrase] ?? null;
    }


}
