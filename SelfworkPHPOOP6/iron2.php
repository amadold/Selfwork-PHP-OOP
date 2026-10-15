<?php


require_once('index.php');


class Iron2 extends IronMan
{
    public function getArmour()
    {
        return "Quantità: " . self::$counter++ . "\n";
    }
}

$iron2 = new Iron2();
echo $iron2->getArmour();
