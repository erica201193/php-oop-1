<?php

class Movie {
    public $title;
    public $originalTitle;
    public $originalLanguage;
    public $genre;
    public $year;

    function __construct($_title, $_originalTitle, $_originalLanguage, $_genre, $_year)
    {
        $this->title = $_title;
        $this->originalTitle = $_originalTitle;
        $this->originalLanguage = $_originalLanguage;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    

    /**
     * Get the value of title -----------------------------
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of originalTitle -----------------------------
     */ 
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    /**
     * Set the value of originalTitle
     *
     * @return  self
     */ 
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    /**
     * Get the value of originalLanguage -----------------------------
     */ 
    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    /**
     * Set the value of originalLanguage
     *
     * @return  self
     */ 
    public function setOriginalLanguage($originalLanguage)
    {
        $this->originalLanguage = $originalLanguage;

        return $this;
    }

    /**
     * Get the value of genre -----------------------------
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of year -----------------------------
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    public function printCard()
    {
        $title = $this->getTitle();
        $originalTitle = $this->getOriginalTitle();
        $originalLanguage = $this->getOriginalLanguage();
        $genre = $this->getGenre();
        $year = $this->getYear();

        echo "
        <h2>$title</h2>
        <h3>Titolo originale: $originalTitle</h3>
        <div>Lingua originale: $originalLanguage</div>
        <div>Genere: $genre</div>
        <div>Anno: $year</div>
        <br>
        <hr>
        ";
    }
}