<?php

class Vertebrate
{
    public function __construct()
    {
        echo "Sono un animale vertebrato\n";
    }
}

class WarmBlood extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un animale a sangue caldo\n";
    }
}

class Mammal extends WarmBlood {}
class Bird extends WarmBlood {}

class ColdBlood extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un animale a sangue freddo\n";
    }
}

class Fish extends ColdBlood {}
class Reptile extends ColdBlood {}
class Amphibian extends ColdBlood {}

$mammal = new Mammal();
$bird = new Bird();
$fish = new FIsh();
$reptile = new Reptile();
$amphibian = new Amphibian();
