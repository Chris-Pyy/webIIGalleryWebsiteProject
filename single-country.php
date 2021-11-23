<?php
// if the id parameter is not present in the url, redirect to the error page
include 'findArrayElement.php';
include 'languages-data.php';
include 'countries-data.php';
include 'imagedetails-data.php';
include 'country-details.php';
include 'cities-data.php';
include 'image-thumbnail.php';



if (isset($_GET['iso'])) {
    $queryString = true;
    $iso = $_GET['iso'];    
    $index = findArrayElement($iso, $countries, 'ISO');    
    if (empty($index)) {
        header("Location: error.php");
    }
    $country = new CountryDetails($index[0]);   
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
    <script src="javascript/countryFilters.js"></script>
    <script src="javascript/countryList.js"></script>
    <script src="javascript/images.js"></script>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/search.css">
    <script src="javascript/navbar.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include 'navbar.inc.php'; ?>
    <div class="fixed-action-btn">
        <button id="filterHamburgerBtn" class='btn-floating waves-effect waves-light btn-large blue signup col s12'>filters</button>
    </div>
        <div class="sidenav filters col s6 m9 l3 column main">
            <div class="row s1 card-panel">
                <p class="center-align">filters</p>
                <div class="input-field col s12">
                    <input id="filter_search" type="text">
                    <label class="blue-text" for="filter_search">search Countries</label>
                </div>
                <button id="filter_imgavail" class='waves-effect waves-light btn blue signup col s12'>images available</button>
                <div id="filter_continent" class="col card-panel">
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>Africa</span>
                    </label>
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>Antarctica</span>
                    </label>
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>Asia</span>
                    </label>
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>Europe</span>
                    </label>
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>North America</span>
                    </label>
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>Oceania</span>
                    </label>
                    <label class="col s12">
                        <input type="checkbox" class="filled-in filterCheckbox" />
                        <span>South America</span>
                    </label>
                </div>
            </div>
            <div class="row s1 card-panel" style="overflow: auto; height: 45vh;">
                <p class="center-align">Country list</p>
                <div class="row countryList center-align">
                    <form action="single-country.php" method="get"></form>
                </div>
            </div>
        </div>
    <div class='row container'>
        <div class="col s12 m12 l12 column center-align">
            <div class="col s12 m7 l7 card-panel" style="height: 60vh;">
                <div class="section">
                    <?php
                        if ($queryString) 
                        {
                            echo $country->getCountryDetails();
                        }
                    ?>
                </div>
            </div>
            <div class="col s12 m5 l5 card-panel main" style="overflow: auto; height: 60vh;">
            <h5>City list</h5>
                <?php 
                if ($queryString) 
                {
                    foreach ($country->getCityList() as $city) 
                    {
                        echo '<a class="row s1" href=single-city.php?id=' . $cities[$city]['CityCode'] . ' id="' . $cities[$city]['CityCode'] . '">'
                        . $cities[$city]['AsciiName'] . '</a>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="col s12 m12 l12 column center-align card-panel main">
            <h4>photos</h4>
            <div class="row gallery">
                <?php
                    if ($queryString) 
                    {
                        foreach ($country->getImageList() as $image) 
                        {
                            $imageDom = new ImageThumbnail($images[$image]);
                            echo $imageDom->createElement();
                        }
                    }
                ?>
            </div>
        </div>

    </div>


</body>

</html>