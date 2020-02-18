<?php


namespace MohAbdElaziz\ChuckNorrisJokes\Tests;


use MohAbdElaziz\ChuckNorrisJokes\JokesFactory;
use PHPUnit\Framework\TestCase;

class JokesFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke ()
    {
        $jokes = new JokesFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke ()
    {
        $chuckNorrisJokes = [
            "Chuck Norris' tears cure cancer. Too bad he has never cried.",
            "Chuck Norris counted to infinity... Twice."
        ];

        $jokes = new JokesFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}