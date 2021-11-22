<?php



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

    public function getCityDetails() {
        global $countries;
        $country = $countries[findArrayElement($this->countryCode, $countries, 'ISO')[0]];

        $cityDetails = '<h3>' . $this->asciiName . '</h3>'  .
            '<p>' .
            'Country: '. $country['CountryName'] . '<br>' .
            'Latitude: ' . $this->latitude . '<br>' .
            'Longitude: ' . $this->longitude . '<br>' .
            'Population: ' . $this->population . '<br>' .
            'Elevation: ' . $this->elevation . ' metres<br>' .
            'Timezone: ' . $this->timezone . '<br>' .
            '</p>';

        return $cityDetails;
    }


}
