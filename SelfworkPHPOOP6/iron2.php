<?php

abstract class LeftArm
{
    abstract public function getLeftArm();
}

class Shield extends LeftArm
{
    public function getLeftArm()
    {
        return "Shield activated!\n";
    }
}
