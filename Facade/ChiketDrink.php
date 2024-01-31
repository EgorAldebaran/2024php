<?php

class ChiketDrink
{
    /**
    * @var Chiket
    */
    private $chiket;

    public function __construct($chiket)
    {
        $this->chiket = $chiket;
    }

    public function drink(string $drink)
    {
        echo "$this->chiket drink is " . $drink;
    }
}
