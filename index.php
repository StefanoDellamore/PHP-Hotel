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
        <!-- link bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>PHP Hotel</title>
    </head>
    <body>
        <br>
        <!-- form -->
        <form method="GET">
            <input type="checkbox"  name="parking" id="parckingCheckbox">
            <label for="parckingCheckbox">Hotel with parking</label>
            <button type="submit">Apply</button>
        </form>

        <br>
        <!-- table -->
        <table class="table table-striped table-dark">
        
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Description:</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to centre</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach ($hotels as $hotel) {
                        if (isset($_GET['parking']) && $_GET['parking'] == 'on' && !$hotel['parking']) {
                            continue;}
                ?>

                    <tr>
                        <td scope="row"> <?php echo $hotel ['name']?> </td>
                        <td scope="row"> <?php echo $hotel ['description']?> </td>
                        <td scope="row"> <?php echo $hotel ['parking'] ? 'Yes' : 'No' ?> </td>
                        <td scope="row"> <?php echo $hotel ['vote']?> </td>
                        <td scope="row"> <?php echo $hotel ['distance_to_center']. 'km' ?> </th>
                    </tr>

                <?php } ?>

            </tbody>
      
        </table> 
    </body>
</html>