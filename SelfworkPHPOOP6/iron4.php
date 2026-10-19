<?php

abstract class Back
{
    abstract public function getBack();
}

class JetPack extends Back
{
    public function getBack()
    {
        return "Jet pack activated!\n";
    }
}
