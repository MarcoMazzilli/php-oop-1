<?php 
include_once __DIR__ . '/Author.php';

class Movie {
    
    public $title;
    public $category;
    public $duration;
    public $author;
    public $minAge;


    function __construct(string $_title, string $_category, int $_duration, int $_age, Author $_author = null){
        $this->title = $_title;
        $this->category = $_category;
        $this->duration = $_duration;
        $this->minAge = $this->adultsOnly($_age);
        $this->author = $_author;
    }

    function adultsOnly($_int){
        return $_int > 18 ? $this->minAge = 'Film non adatto ai minori' : $this->minAge = 'Film per tutta la famiglia';
    }
}
?>