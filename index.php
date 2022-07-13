<?php

require_once "class.php";

$movie1 = new Movie("Il padrino", "The Godfather", "Inglese", "Dramma", 1972);
$movie2 = new Movie("Pulp fiction", "Pulp fiction", "Inglese", "Thriller", 1994);
$movie3 = new Movie("Il buono, il brutto, il cattivo", "Il buono, il brutto, il cattivo", "Italiano", "Western", 1966);
$movie4 = new Movie("Il Signore degli Anelli - Il ritorno del re", "The Lord of the Rings: The Return of the King", "Inglese", "Fantasy", 2003);

$movie1->printCard();
$movie2->printCard();
$movie3->printCard();
$movie4->printCard();
