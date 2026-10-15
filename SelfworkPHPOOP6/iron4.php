<?php


require_once('index.php');


class Iron4 extends IronMan
{
    public function getArmour()
    {
        return "Quantità: " . self::$counter++ . "\n";
    }
}

$iron4 = new Iron4();
echo $iron4->getArmour();
