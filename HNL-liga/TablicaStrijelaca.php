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
                <a class="nav-link" href="index.php">Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Tablica.php">Poredak u ligi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="TablicaStrijelaca.php">Najbolji strijelci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="klubovi.php">Klubovi</a>
            </li>
        </ul>
                    <div class="col-md-12">
                        <h2 class="mt-4">Najbolji strijelci</h2>
                        <br>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Rang</th>
                                    <th>Igrač</th>
                                    <th>Tim</th>
                                    <th>Golovi</th>
                                    <th>Asistencije</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                $json = file_get_contents('igraci.json');
                                $data = json_decode($json, true);
                                foreach ($data as $item) {
                                    echo "<tr>";
                                    echo "<td>" . $item['rang'] . "</td>";
                                    echo "<td>" . $item['igrac'] . "</td>";
                                    echo "<td>" . $item['tim'] . "</td>";
                                    echo "<td>" . $item['golovi'] . "</td>";
                                    echo "<td>" . $item['asistencije'] . "</td>";
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
