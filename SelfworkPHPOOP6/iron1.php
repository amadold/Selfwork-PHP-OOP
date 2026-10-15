<?php


require_once('index.php');


class Iron1 extends IronMan
{
    public function getArmour()
    {
        return "Quantità: " . self::$counter++ . "\n";
    }
}

$iron1 = new Iron1();
echo $iron1->getArmour();
