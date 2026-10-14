<?php

class Car
{
    private $num_telaio;
    public function __construct($num_telaio)
    {
        $this->num_telaio = $num_telaio;
    }
    public function info()
    {
        return $this->num_telaio;
    }
}

class Fiat extends Car
{
    protected $license;
    protected $name;
    public function __construct($name, $license, $num_telaio)
    {
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function info()
    {
        return "La mia macchina è $this->name, con targa $this->license e numero di Telaio " . parent::info();
    }
}

$carInfo = new Fiat('Opel', 'ND 123 OJ', '1234');
echo $carInfo->info();
