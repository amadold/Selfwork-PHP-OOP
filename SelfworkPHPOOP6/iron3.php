<?php


require_once('index.php');


class Iron3 extends IronMan
{
    public function getArmour()
    {
        return "Quantità: " . self::$counter++ . "\n";
    }
}

$iron3 = new Iron3();
echo $iron3->getArmour();
