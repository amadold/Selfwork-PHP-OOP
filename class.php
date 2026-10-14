<?php

abstract class Category
{
    public $category;
    public function __construct($category)
    {
        $this->category = $category;
    }
    abstract public function getMyCategory();
}

class Attualita extends Category
{
    public function getMyCategory()
    {
        return "Categoria: " . $this->category . "\n";
    }
}

class Sport extends Category
{

    public function getMyCategory()
    {
        return "Categoria: " . $this->category . "\n";
    }
}

class Gossip extends Category
{
    public function getMyCategory()
    {
        return "Categoria: " . $this->category . "\n";
    }
}

class Storia extends Category
{
    public function getMyCategory()
    {
        return "Categoria: " . $this->category . "\n";
    }
}

$attualita = new Attualita('Attualità');
echo $attualita->getMyCategory();
$sport = new Sport('Sport');
echo $sport->getMyCategory();
$gossip = new Gossip('Gossip');
echo $gossip->getMyCategory();
$storia = new Storia('Storia');
echo $storia->getMyCategory();
