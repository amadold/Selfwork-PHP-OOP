<?php


require('iron1.php');
require('iron2.php');
require('iron3.php');
require('iron4.php');


abstract class IronMan
{
    public static $counter = 1;

    public function __counstruct()
    {
        self::$counter++;
    }

    abstract public function getArmour();
}

class Quantity extends IronMan
{
    public function getArmour()
    {
        $quantity = self::$counter - 1;
        return "Quantità totale: " . $quantity . "\n";
    }
}

$total = new Quantity();
echo $total->getArmour();
