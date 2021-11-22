<?php 
// if the id parameter is not present in the url, redirect to the error page
include 'cities-data.php';
include 'languages-data.php';
include 'countries-data.php';
include 'imagedetails-data.php';

include 'findArrayElement.php';
include 'city-details.php';
include 'image-thumbnail.php';



if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $index = findArrayElement($id, $cities, 'CityCode');    
    if (empty($index)) {
        header("Location: error.php");
    }
    $city = new CityDetails($index[0]);   
    
   

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Cities</title>
</head>
<body>
    <?php include 'navbar.inc.php'; ?>
    <div class='row'>
        <div class="col s12 m12 l3 column center-align card-panel z-depth-5 main">
            <div class="row s1 card-panel grey lighten-4 z-depth-1 hoverable">
                <p>filters</p>
            </div>
                <p>filter list</p>
        </div>
        <div class="col s12 m12 l6 column center-align card-panel main">
            <div class="row s1 card-panel">
                <div class="section">
                    <?= ($city->getCityDetails());?>
                </div>
            </div>
            <div class="row s1 card-panel">
                <h1>map or list</h1>
            </div>
        </div>
        <div class="col s12 m12 l3 column center-align card-panel main">
            <h1>photos</h1>
            <div class="row gallery">
               
            <?php 
                foreach ($city->getImageList() as $image) {
                    $image2 = new ImageThumbnail($images[$image]);
                    echo $image2->createElement();
                }
            ?>
                
            </div>
        </div>

    </div>
</body>
</html>