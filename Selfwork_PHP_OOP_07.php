<?php

trait Calculator
{

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }

    public function sqr($a)
    {
        return sqrt($a);
    }
}

class Rettangolo
{
    use Calculator;
    public $base;
    public $altezza;

    public function __construct($base, $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area()
    {
        return $this->mul($this->base, $this->altezza) . "\n";
    }

    public function perimetro()
    {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza)) . "\n";
    }

    public function diagonale()
    {
        return round($this->sqr($this->sum($this->mul($this->altezza, $this->altezza), $this->mul($this->base, $this->base)))) . "\n";
    }
}

$rettangolo = new Rettangolo(12, 4);

echo "Area: " . $rettangolo->area();
echo "Perimetro: " . $rettangolo->perimetro();
echo "Diagonale: " . $rettangolo->diagonale();
