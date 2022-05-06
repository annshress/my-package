<?php

namespace annshress\OpenWeatherClient;

/**
 * Represents an OpenWeather location.
 */
class Location
{
    private $city;
    private $state;
    private $country;

    /**
     * Creates a new Location.
     */
    public function __construct($city, $state, $country)
    {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    /**
     * Returns the city.
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the state.
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Returns the country.
     */
    public function getCountry()
    {
        return $this->country;
    }
}
