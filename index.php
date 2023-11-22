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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <form action="" class="p-4">
        <input type="text" name="filter">
        <input type="submit" value="spedisci">
    </form>

    <div class="container-fluid pt-3">
        <div class="row d-flex ">
            <?php  
                foreach($hotels as $hotel ){
                    ?><div class="col-3 p-2">
                        <div class="card ">
                            <ul>
                                <li>Nome Hotel: <?php echo $hotel['name']; ?></li>
                                <li>Descrizione: <?php echo $hotel['description']; ?></li>
                                <li>Voto: <?php echo $hotel['vote']; ?> su 5</li>
                                <li>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> Km</li>
                            </ul>
                        </div>
                    </div>    
                    <?php
                }
            ?>  
        </div>
    </div>
        

</body>
</html>