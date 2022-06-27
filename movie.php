<?php

class Movie {
    public $title;
    public $movieHouse;
    public $year;
    public $genre;

    public function __construct($_title, $_movieHouse, $_year)
    {
        $this->title = $_title;
        $this->movieHouse = $_movieHouse;
        $this->year = $_year;
    }
}

?>