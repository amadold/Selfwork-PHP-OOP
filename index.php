<?php

abstract class Category
{
    abstract public function getMyCategory();
}

class Attualita extends Category
{
    public function getMyCategory()
    {
        return "Attualità";
    }
}

class Sport extends Category
{

    public function getMyCategory()
    {
        return "Sport";
    }
}

class Gossip extends Category
{
    public function getMyCategory()
    {
        return "Gossip";
    }
}

class Storia extends Category
{
    public function getMyCategory()
    {
        return "Storia";
    }
}

class Post
{
    public $title;
    public Category $category;
    public $tag;

    public function __construct($title, Category $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getMyCategory()
    {
        return "Titolo: $this->title\nCategoria: {$this->category->getMyCategory()}\nTag: $this->tag";
    }
}

$post = new Post('UEFA Champions League', new Sport(), 'Calcio');
echo $post->getMyCategory();
