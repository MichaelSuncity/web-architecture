<?php


class CircleAdapter implements ICircle
{
    private $circleAreaLib;

    public function __construct()
    {
        $this->circleAreaLib = new CircleAreaLib();
    }

    public function circleArea(int $circumference)
    {
        $diagonal = $circumference /  M_PI;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }
}