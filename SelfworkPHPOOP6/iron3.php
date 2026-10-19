<?php

abstract class Legs
{
    abstract public function getLegs();
}

class Gravity extends Legs
{
    public function getLegs()
    {
        return "Gravity boots activated!\n";
    }
}
