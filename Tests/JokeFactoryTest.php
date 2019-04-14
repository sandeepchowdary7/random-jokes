<?php

namespace Sandeep\RandomJoke\Tests;

use PHPUnit\Framework\TestCase;
use Sandeep\RandomJoke\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_random_joke()
    {
        $jokes = new JokeFactory(['a sample joke.']);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('a sample joke.', $joke);
    }

    /** @test */
    public function it_returns_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris sheds his skin twice a year.',
            'Chuck Norris does not teabag the ladies. He potato-sacks them.',
            'What was going through the minds of all of "Chuck Norris/" victims before they died? His shoe.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
