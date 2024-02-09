<?php

require 'ChiketDrink.php';
require 'ChiketFeed.php';
require 'ChiketErase.php';


class Button
{
    private $drink;
    private $food;
    private $erase;

    public function __construct($chiket)
    {
        $this->drink = new ChiketDrink($chiket);
        $this->food = new ChiketFeed($chiket);
        $this->erase = new ChiketErase($chiket);
    }

    public function run(): ?string
    {
        $infoBtn = "Ты нажал на гребанную кнопку в курятнике! \n";
        $infoBtn .= $this->drink->drink(' water ') . "\n";
        $infoBtn .= $this->food->feed(' gamburger ') . "\n";
        $infoBtn .= $this->erase->erase() . "\n";

        return $infoBtn;
    }
}
