<?php

class Movie{
    public $nazionalita;
    public $genere;
    public $durata = 130;
    
    public function setDurata($lunghezza) {
        if($lunghezza < 100 ){
            $this->lunghezza = "Film di breve durata";
        }
    }
     
    public function getDurata() {
        return $this->lunghezza;
        }

    function __construct($_genere, $_nazionalita) {
        $this->genere = $_genere;
        $this->nazionalita = $_nazionalita;

    }
}

$movie_1 = new Movie("Horror","USA");
//echo $movie_1->genere;
$movie_1->setDurata("130");
$durata_movie_1 = $movie_1->getDurata();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>
<body>
    <pre>
        <!-- <?php var_dump($movie_1);?> -->
    </pre>
        <p>Il genere del film è :<?php echo $movie_1->genere; ?></p>
        <p>Il film è stato fatto in :<?php echo $movie_1->nazionalita; ?></p>
        <p><?php echo $movie_1->getDurata() ?></p>
</body>
</html>