<?php 
include 'cities-data.php';
include 'languages-data.php';
include 'countries-data.php';

function findCityOrCountry($key, $isCountry) {
    global $cities;
    global $countries;
    $index = -1;

    if ($isCountry) {
        foreach ($countries as $country) {
            if ($country['ISO'] == $key) {
                $index = array_search($country, $countries);
                break;
            }
        }
    } else {
        foreach ($cities as $city) {
            if ($city['CityCode'] == $key) {
                $index = array_search($city, $cities);
                break;
            }
        }
    }
    return $index;

}

