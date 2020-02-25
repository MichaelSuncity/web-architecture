<?php

class SquareAdapter implements ISquare
{
    private $squareAreaLib;

    public function __construct()
    {
       $this->squareAreaLib = new SquareAreaLib();
    }

    public function squareArea(int $sideSquare)
    {
        $diagonal = $sideSquare * sqrt(2);
        return  $this->squareAreaLib->getSquareArea($diagonal);
    }
}