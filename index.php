<?php

class Movie{
    public $nazionalita;
    public $genere;
}

$movie_1 = new Movie();
$movie_1->genere = "Horror";
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
        <?php var_dump($movie_1);?>
    </pre>
        <?php echo $movie_1->genere; ?>
</body>
</html>