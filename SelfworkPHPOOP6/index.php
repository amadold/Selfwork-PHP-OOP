<?php


require_once('iron1.php');
require_once('iron2.php');
require_once('iron3.php');
require_once('iron4.php');


abstract class IronMan
{
    public static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    abstract public function getArmour();
}

$suit = ["Iron1", "Iron2", "Iron3", "Iron4"];
$army = [];

for ($i = 0; $i < rand(1, 10); $i++) {
    $armyGenerated = $suit[array_rand($suit)];
    $army[] = new $armyGenerated();
}

foreach ($army as $armySuit) {
    echo $armySuit->getArmour();
}
echo "Quantità: " . IronMan::$counter;
