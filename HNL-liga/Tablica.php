<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNL</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="container">
    <h1 class="text-center">HRVATSKA NOGOMETNA LIGA - HNL</h1>
    <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php" >Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="Tablica.php">Poredak u ligi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="TablicaStrijelaca.php">Najbolji strijelci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="klubovi.php">Klubovi</a>
            </li>
        </ul>
                
                    <div class="col-md-12">
                        <h2 class="mt-4">Poredak u ligi</h2>
                        <br>
                        <table class="table table-striped thead-dark table-hover">
                            <thead class="blue">
                                <tr>
                                    <th>Rang</th>
                                    <th>Tim</th>
                                    <th>Utakmice</th>
                                    <th>Pobjede</th>
                                    <th>Neriješeno</th>
                                    <th>Porazi</th>
                                    <th>Golovi</th>
                                    <th>Bodovi</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                $xml = simplexml_load_file('timovi.xml') or die("Neuspješno učitavanje XML datoteke.");
                                foreach ($xml->tim as $tim) {
                                    echo "<tr>";
                                    echo "<td>" . $tim->rang . "</td>";
                                    echo "<td>" . $tim->ime . "</td>";
                                    echo "<td>" . $tim->utakmice . "</td>";
                                    echo "<td>" . $tim->pobjede . "</td>";
                                    echo "<td>" . $tim->neriješeno . "</td>";
                                    echo "<td>" . $tim->porazi . "</td>";
                                    echo "<td>" . $tim->golovi . "</td>";
                                    echo "<td>" . $tim->bodovi . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <footer><p>Copyright &copy 2024 Ivan Kuštović</p></footer>
                    </div>
        </body> 
        </html>  
            