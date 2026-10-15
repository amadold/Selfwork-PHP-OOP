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

class Post
{
    public $title;
    public $category;
    public $tag;

    public function __construct($title, $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getMyCategory()
    {
        return "Titolo: $this->title\nCategoria: $this->category\nTag: $this->tag";
    }
}

$post = new Post('UEFA Champions League', 'Sport', 'Calcio');
echo $post->getMyCategory();
