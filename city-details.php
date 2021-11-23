<?php

use JetBrains\PhpStorm\Language;

class CityDetails {
    private $cityCode;
    private $asciiName;
    private $countryCode;
    private $latitude;
    private $longitude;
    private $population;
    private $elevation;
    private $timezone;

    private $imageList;

    public function __construct($index) {
        global $cities;
        $city = $cities[$index];
        $this->cityCode = $city['CityCode'];
        $this->asciiName = $city['AsciiName'];
        $this->countryCode = $city['CountryCodeISO'];
        $this->latitude = $city['Latitude'];
        $this->longitude = $city['Longitude'];
        $this->population = $city['Population'];
        $this->elevation = $city['Elevation'];
        $this->timezone = $city['TimeZone'];

        $this->populateImages();

    }

    private function populateImages() {
        global $images;
        $this->imageList = findArrayElement($this->cityCode, $images, 'CityCode');
        
    }

    public function getImageList() {
        return $this->imageList;
    }

    private function getLanguage($iso) {
        global $languages;

        $languageID = findArrayElement($iso, $languages, 'iso');
        if ($languageID == null) {
            return null;
        }

        return $languages[$languageID[0]];
    }

    public function getCityDetails() {
        global $countries;
        $country = $countries[findArrayElement($this->countryCode, $countries, 'ISO')[0]];
        $countryLanguages = $country['Languages'];
        $languageArr = explode(',', $countryLanguages);

        // for each language in languageArr, get the language name
        $languageNames = '';
        foreach ($languageArr as $iso) {
            $language = $this->getLanguage(substr($iso,0, 2));
            if ($language != null) {
              $languageNames .=  $language['name'] . ', ';
            }
    
        }

        

        



        $cityDetails = '<h3>' . $this->asciiName . '</h3>'  .
            '<p>' .
            'Country: '. $country['CountryName'] . '<br>' .
            'Languages: ' . substr($languageNames, 0, -2) . '<br>' .
            'Latitude: ' . $this->latitude . '<br>' .
            'Longitude: ' . $this->longitude . '<br>' .
            'Population: ' . $this->population . '<br>' .
            'Elevation: ' . $this->elevation . ' metres<br>' .
            'Timezone: ' . $this->timezone . '<br>' .
            '</p>';

        return $cityDetails;
    }

    private function getCountry() {
        global $countries;
        $country = $countries[findArrayElement($this->countryCode, $countries, 'ISO')[0]];
        return $country;
    }



    public function generateMapElement() {
        $country = $this->getCountry();
        $zoom = 0;

        if ($country["ISO"] == 'CA' ) {
            $zoom = 3;
        } else if ($country["ISO"] == 'US') {
            $zoom = 4;
        } else {
            $zoom = 6;
        }


        return '<picture>
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center='. $country['CountryName']
                        .',&amp;&zoom='. $zoom .'&amp;&markers=color:red%7C'.$this->latitude.','.
                        $this->longitude.'&size=781x250&amp;key=AIzaSyDDkAYxD7mVGOcuF1KW7egAqoIf_ADroBI">
                </picture>';
    }


}
