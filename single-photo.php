<?php
include 'cities-data.php';
include 'continents-data.php';
include 'languages-data.php';
include 'countries-data.php';
include 'imagedetails-data.php';
include 'findArrayElement.php';
include 'photo-details.php';

if (isset($_GET['id'])) {
    $queryString = true;
    $id = $_GET['id'];
    $index = findArrayElement($id, $images, 'ImageID');
    if (empty($index)) {
        header("Location: error.php");
    }
    $photo = new PhotoDetails($index[0]);
} else {
    $queryString = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript/tabLinks.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Photos</title>
</head>

<body>
    <?php include 'navbar.inc.php'; ?>


    <div class="photo">
        <div class="thumbnail">
            <img src="https://via.placeholder.com/425C/O" alt="">
        </div>
        <div class="info">
            <?php

            ?>
            <!-- <h2>Photo Title</h2> -->
            <h3>Username</h3>
            <h3><a href=''>Country</a>, <a href=''>City</a></h3>
            <button type="button">Add to favourites</button>
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Description')">Description</button>
                <button class="tablinks" onclick="openCity(event, 'Details')">Details</button>
                <button class="tablinks" onclick="openCity(event, 'Maps')">Maps</button>
            </div>

            <!-- Tab content -->
            <div id="Description" class="tabcontent">
                <h3>Description</h3>
                <p></p>
            </div>

            <div id="Details" class="tabcontent">
                <h3>Details</h3>
                <p></p>
            </div>

            <div id="Maps" class="tabcontent">
                <h3>Maps</h3>
                <p></p>
            </div>
        </div>
    </div>
</body>

</html>