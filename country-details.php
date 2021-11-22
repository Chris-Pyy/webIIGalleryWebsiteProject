<?php

class CountryDetails {
    private $iso;
    private $isoNumeric;
    private $countryName;
    private $capital;
    private $cityCode;
    private $area;
    private $population;
    private $continent;
    private $topLevelDomain;
    private $currencyCode;
    private $currencyName;
    private $phoneCountryCode;
    private $languages;
    private $neighbours;
    private $countryDescription;
    private $imageList;
    private $cityList;

    public function __construct($index) {
        global $countries;
        $country = $countries[$index];

        $this->iso = $country['ISO'];
        $this->isoNumeric = $country['ISONumeric'];
        $this->countryName = $country['CountryName'];
        $this->capital = $country['Capital'];
        $this->cityCode = $country['CityCode'];
        $this->area = $country['Area'];
        $this->population = $country['Population'];
        $this->continent = $country['Continent'];
        $this->topLevelDomain = $country['TopLevelDomain'];
        $this->currencyCode = $country['CurrencyCode'];
        $this->currencyName = $country['CurrencyName'];
        $this->phoneCountryCode = $country['PhoneCountryCode'];
        $this->languages = $country['Languages'];
        $this->neighbours = $country['Neighbours'];
        $this->countryDescription = $country['CountryDescription'];
        $this->populateImages();
        $this->populateCities();
    }

    private function populateImages() 
    {
        global $images;
        $this->imageList = findArrayElement($this->iso, $images, 'CountryCodeISO');
    }

    private function populateCities() 
    {
        global $cities;
        $this->cityList = findArrayElement($this->iso, $cities, 'CountryCodeISO');
    }

    public function getImageList() 
    {
        return $this->imageList;
    }

    public function getCityList() 
    {
        return $this->cityList;
    }

    public function getCountryDetails() 
    {
        $countryDetails = '<h3>' . $this->countryName .  '</h3>'
        . '<p> Area (km sq): ' . $this->area . '<br>Population: ' 
        . $this->population . '<br>Currency: ' . $this->currencyName . ' (' . $this->currencyCode . ')'
        . '<br>Domain: ' . $this->topLevelDomain . '<br>Languages: ' . $this->languages . '<br>Neighbouring countries: '
        . $this->neighbours . '<br>' . $this->countryDescription . '</p>';

        return $countryDetails;
    }

}

?>