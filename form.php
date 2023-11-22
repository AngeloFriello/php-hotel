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

    $filter = isset($_GET['filter']) ? $_GET['filter'] : 'no';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<div class="container pt-3">
    <div class="row d-flex ">
        <table >
            <thead>
                <tr>
                    <th>Nome Hotel</th>
                    <th>Descrizione</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                    <th>parcheggio</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if($filter != 'no'){
                    foreach($hotels as $hotel ){
                        if($hotel['parking'] === true){
                            ?>
                            <tr>
                                <td><?php echo $hotel['name']; ?></td>
                                <td><?php echo $hotel['description']; ?></td>
                                <td><?php echo $hotel['vote']; ?> su 5</td>
                                <td><?php echo $hotel['distance_to_center']; ?> Km</td>
                                <td>?</td>
                            </tr>  
                            <?php  
                        }
                    }
                }else{
                    foreach($hotels as $hotel ){
                        ?>
                        <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td><?php echo $hotel['vote']; ?> su 5</td>
                            <td><?php echo $hotel['distance_to_center']; ?> Km</td>
                            <td>?</td>
                        </tr>  
                        <?php  
                    }
                }
            ?>  
            </tbody>
        </table>          
</body>
</html>