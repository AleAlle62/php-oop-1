
<?php
class Movie {
    //variabili d'istanza
    public $title;
    public $director;
    public $releaseYear;
    
    //Funzione costruttore
    public function __construct($title, $director, $releaseYear) {
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
    }
    
    //Metodo
    public function getTitle() {
            return $this->title;
        }
    }

$movie1 = new Movie("AVATAR",'james cameron', 2010);

//Stampare il titolo 
echo $movie1->getTitle();
?>


