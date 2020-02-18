<?php

namespace MohAbdElaziz\ChuckNorrisJokes;

class JokesFactory
{
    /**
     * @var array
     */
    private $jokes = [
        "Chuck Norris' tears cure cancer. Too bad he has never cried.",
        "Chuck Norris counted to infinity... Twice."
    ];

    /**
     * JokesFactory constructor.
     * @param array $jokes
     */
    public function __construct (array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }

    }

    public function getRandomJoke ()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}