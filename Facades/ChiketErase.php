<?php

class ChiketErase
{
    /**
    * @var Chiket
    */
    private $chiket;

    public function __construct($chiket)
    {
        $this->chiket = $chiket;
    }

    public function erase()
    {
        echo "$this->chiket erase is ";
    }
}
