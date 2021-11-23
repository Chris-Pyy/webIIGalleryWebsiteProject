<?php

class PhotoDetails
{
    private $imageID;
    private $userID;
    private $title;
    private $description;
    private $latitude;
    private $longitude;
    private $cityCode;
    private $countryCodeISO;
    private $continentCode;
    private $path;
    private $exif;
    private $actualCreator;
    private $creatorURL;
    private $sourceURL;
    private $colors;

    public function __construct($index)
    {
        global $images;
        $photo = $images[$index];

        $this->imageID = $photo['ImageID'];
        $this->userID = $photo['UserID'];
        $this->title = $photo['Title'];
        $this->description = $photo['Description'];
        $this->latitude = $photo['Latitude'];
        $this->longitude = $photo['Longitude'];
        $this->cityCode = $photo['CityCode'];
        $this->countryCodeISO = $photo['CountryCodeISO'];
        $this->continentCode = $photo['ContinentCode'];
        $this->path = $photo['Path'];
        $this->exif = $photo['Exif'];
        $this->actualCreator = $photo['ActualCreator'];
        $this->creatorURL = $photo['CreatorURL'];
        $this->sourceURL = $photo['SourceURL'];
        $this->colors = $photo['Colors'];
    }
}
