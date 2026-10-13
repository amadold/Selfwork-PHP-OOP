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

class Mammal extends WarmBlood
{
    public function __construct()
    {
        parent::__construct();
        $this->mammal();
    }
    protected function mammal()
    {
        echo "Sono un mammifero\n";
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
        echo "Sono un uccello\n";
    }
}

class ColdBlood extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un animale a sangue freddo\n";
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
        echo "Sono un pesce\n";
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
        echo "Sono un rettile\n";
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
        echo "Sono un anfibio\n";
    }
}

$mammal = new Mammal();
$bird = new Bird();
$fish = new FIsh();
$reptile = new Reptile();
$amphibian = new Amphibian();
