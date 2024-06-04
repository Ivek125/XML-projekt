<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klubovi HNL-a</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stil.css">
</head>
<body>
<div class="container">
        <h1 class="text-center">HRVATSKA NOGOMETNA LIGA - HNL</h1>
        
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php" >Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Tablica.php">Poredak u ligi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="TablicaStrijelaca.php">Najbolji strijelci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="klubovi.php">Klubovi</a>
            </li>
        </ul>
        <br>
        <h2>Klubovi</h2>
        <br>
        <div id="clubCarousel" class="carousel slide" >
            <div class="carousel-inner">
                <?php
                $json = file_get_contents('klubovi.json');
                $klubovi = json_decode($json, true);
                $active = 'active';
                foreach ($klubovi as $index => $klub) {
                    echo '<div class="carousel-item ' . $active . '">';
                    echo '<h2>' . $klub['ime'] . '</h2>';
                    echo '<p>' . $klub['opis'] . '</p>';
                    echo '<img src="slike/' . $klub['ime'] . '.png"</img>';
                    echo '</div>';
                    $active = '';
                }
                ?>
            </div>
            <a class="carousel-control-prev black" href="#clubCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" ></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next black" href="#clubCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" ></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <footer><p>Copyright &copy 2024 Ivan Kuštović</p></footer>
    </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>