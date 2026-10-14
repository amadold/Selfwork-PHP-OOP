<?php

class Vertebrate
{
    public function __construct()
    {
        $this->vertebrate();
    }
    protected function vertebrate()
    {
        echo "Sono un animale Vertebrato\n";
    }
}

class WarmBlood extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        $this->warmBlood();
    }
    protected function warmBlood()
    {
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class Mammal extends WarmBlood
{
    public function __construct()
    {
        parent::__construct();
        $this->mammal();
    }
    protected function mammal()
    {
        echo "Roar!\n";
    }
}
class Bird extends WarmBlood
{
    public function __construct()
    {
        parent::__construct();
        $this->bird();
    }
    protected function bird()
    {
        echo "Cip! Cip!\n";
    }
}

class ColdBlood extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        $this->coldBlood();
    }
    protected function coldBlood()
    {
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Fish extends ColdBlood
{
    public function __construct()
    {
        parent::__construct();
        $this->fish();
    }
    protected function fish()
    {
        echo "Splash!\n";
    }
}
class Reptile extends ColdBlood
{
    public function __construct()
    {
        parent::__construct();
        $this->reptile();
    }
    protected function reptile()
    {
        echo "Sssssss!\n";
    }
}
class Amphibian extends ColdBlood
{
    public function __construct()
    {
        parent::__construct();
        $this->amphibian();
    }
    protected function amphibian()
    {
        echo "Gre! Gre!\n";
    }
}

$mammal = new Mammal();
$bird = new Bird();
$fish = new FIsh();
$reptile = new Reptile();
$amphibian = new Amphibian();
