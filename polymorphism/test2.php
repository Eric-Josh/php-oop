<?php

abstract class User {
    protected $scores           = 0;
    protected $numberOfArticles = 0;

    // The abstract and concrete methods
    public function setNumberOfArticles($int) {
        $this->numberOfArticles = (int)$int;
    }

    public function getNumberOfArticles() {
        return $this->numberOfArticles;
    }

    abstract public function calcScores();
}

class Author extends User {
    public function calcScores() {
        $this->scores = $this->numberOfArticles * 10 + 20;
        
        return $this->scores;
    }
}

class Editor extends User {
    public function calcScores() {
        $this->scores = $this->numberOfArticles * 6 + 15;
        
        return $this->scores;
    }
}

$author1 = new Author;
$author1->setNumberOfArticles(8);
echo $author1->calcScores()."\n";

$editor1 = new Editor;
$editor1->setNumberOfArticles(15); 
echo $editor1->calcScores();