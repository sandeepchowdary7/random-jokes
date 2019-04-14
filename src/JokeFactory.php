<?php 

namespace Sandeep\RandomJoke;

class JokeFactory 
{
    protected $jokes = [
        'Chuck Norris sheds his skin twice a year.',
        'Chuck Norris does not teabag the ladies. He potato-sacks them.',
        'What was going through the minds of all of "Chuck Norris/" victims before they died? His shoe.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes)
            $this->jokes = $jokes;
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
    
}