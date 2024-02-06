<?php

class ChiketFeed
{
    /**
    * @var Chiket
    */
    private $chiket;

    public function __construct($chiket)
    {
        $this->chiket = $chiket;
    }

    public function feed(string $food)
    {
        echo "$this->chiket is feed ";
    }
}
