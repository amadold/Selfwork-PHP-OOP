<?php

abstract class RightArm
{

    abstract public function getRightArm();
}

class Cannon extends RightArm
{
    public function getRightArm()
    {
        return "Cannon activated!\n";
    }
}
