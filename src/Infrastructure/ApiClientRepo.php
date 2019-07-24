<?php

declare(strict_types = 1);


namespace Paula\TestingProject\Infrastructure;


use GuzzleHttp\Exception\GuzzleException;
use Paula\TestingProject\Repository\getPhraseRepo;

final class ApiClientRepo implements getPhraseRepo
{

    private $clientApi;

    const CONNECTION = 'https://api.tronalddump.io/random/quote';


    public function getPhrase()
    {
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('GET', 'https://api.tronalddump.io/random/quote');
            echo $response->getStatusCode();
            echo $response->getHeaderLine('content-type');
            echo $response->getBody();
        } catch (GuzzleException $e) {
            echo $e;
        }

    }

    public function addPhrase($phrase)
    {
        // TODO: Implement addPhrase() method.
    }
}
