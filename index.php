<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - Hotel</title>
    </head>
    <body>

        <form method="GET" action="">
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="1" id="parkingFilter" name="parkingFilter" 
                <?php if (isset($_GET['parkingFilter'])) echo 'checked'; ?>>
                <label class="form-check-label" for="parkingFilter">
                    Filtra per Hotel che dispongono di un parcheggio
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form>
        
        <?php
            // foreach ($hotels as $hotel) {
            //     echo "Nome: " . $hotel['name'] . "<br>";
            //     echo "Descrizione: " . $hotel['description'] . "<br>";
            //     echo "Parcheggio: " . ($hotel['parking'] ? 'Sì' : 'No') . "<br>";
            //     echo "Voto: " . $hotel['vote'] . "<br>";
            //     echo "Distanza dal centro: " . $hotel['distance_to_center'] . " km<br>";
            //     echo "<hr>";
            // } 
        ?>

        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr <?php foreach ($hotels as $hotel) : ?>>
                        <?php if (!isset($_GET['parkingFilter']) || (isset($_GET['parkingFilter']) && $hotel['parking'])) { ?>
                    <th scope="row"><?php echo $hotel['name'] ?></th>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo ($hotel['parking'] ? 'Sì' : 'No') ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php echo $hotel['distance_to_center'] ?></td>
                        <?php } ?>
                    </tr <?php endforeach; ?>>
                </tbody>
            </table>

        

    </body>
</html>

