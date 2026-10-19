<?php

require_once('iron1.php');
require_once('iron2.php');
require_once('iron3.php');
require_once('iron4.php');

class IronMan
{
    public static $counter = 0;
    private LeftArm $leftArm;
    private RightArm $rightArm;
    private Legs $legs;
    private Back $back;

    public function __construct(LeftArm $leftArm, RightArm $rightArm, Legs $legs, Back $back)
    {
        $this->leftArm = $leftArm;
        $this->rightArm = $rightArm;
        $this->legs = $legs;
        $this->back = $back;
    }

    public function getArmour()
    {
        self::$counter++;
        echo "Armour ready: " . IronMan::$counter . "\n";
        return $this->leftArm->getLeftArm() . $this->rightArm->getRightArm() . $this->legs->getLegs() . $this->back->getBack();
    }
}

$leftArm = new Shield();
$rightArm = new Cannon();
$legs = new Gravity();
$back = new JetPack();
$ironMan = new IronMan($leftArm, $rightArm, $legs, $back);
echo $ironMan->getArmour();
