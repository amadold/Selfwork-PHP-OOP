<?php

class Continent
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }

    public function getMyCurrentLocation()
    {
        return "Mi trovo in $this->nameContinent, ";
    }
}

$myLocation = new Continent('Europa');
echo $myLocation->getMyCurrentLocation();

class Country
{
    public $nameCountry;

    public function __construct($country)
    {
        $this->nameCountry = $country;
    }

    public function getMyCurrentLocation()
    {
        return "$this->nameCountry, ";
    }
}

$myLocation = new Country('Italia');
echo $myLocation->getMyCurrentLocation();

class Region
{
    public $nameRegion;

    public function __construct($region)
    {
        $this->nameRegion = $region;
    }
    public function getMyCurrentLocation()
    {
        return "$this->nameRegion, ";
    }
}

$myLocation = new Region('Puglia');
echo $myLocation->getMyCurrentLocation();

class Province
{
    public $nameProvince;

    public function __construct($province)
    {
        $this->nameProvince = $province;
    }
    public function getMyCurrentLocation()
    {
        return "$this->nameProvince, ";
    }
}

$myLocation = new Province('BA');
echo $myLocation->getMyCurrentLocation();

class City
{
    public $nameCity;

    public function __construct($city)
    {
        $this->nameCity = $city;
    }
    public function getMyCurrentLocation()
    {
        return "$this->nameCity, ";
    }
}

$myLocation = new City('Bari');
echo $myLocation->getMyCurrentLocation();

class Street
{
    public $nameStreet;

    public function __construct($street)
    {
        $this->nameStreet = $street;
    }
    public function getMyCurrentLocation()
    {
        return "$this->nameStreet";
    }
}

$myLocation = new Street('Strada San Giorgio Martire 2D');
echo $myLocation->getMyCurrentLocation();
