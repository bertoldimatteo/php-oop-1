<?php  
    require_once __DIR__ . '/movie.php';

    $movies = [
        new Movie('Star Wars la minaccia fantasma', 'Lucasfilm', '1999'),
        new Movie('Star Wars la vendetta dei sith', 'Lucasfilm', '2005'),
        new Movie('Interstellar', 'Syncopy Films', '2014'),
        new Movie('In Time', 'New Regency, Strike Entertainment', '2011'),
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <h1>Best Movie</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->title ?></h3>
            <h4><?php echo $movie->movieHouse ?></h4>
            <span><?php echo $movie->year ?></span>
        </li>
        <?php } ?>
    </ul>
</body>
</html>