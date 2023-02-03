<?php

class Movie{
    public $nazionalita;
    public $genere;

    function __construct($_genere) {
        $this->genere = $_genere;
    }
}

$movie_1 = new Movie("Horror");
//echo $movie_1->genere;
$movie_1->nazionalita = "USA";  

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
</body>
</html>