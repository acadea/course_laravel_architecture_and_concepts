<?php


namespace App\Services\Geolocation;


use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{

    /**
     * @var Map
     */
    private $map;
    /**
     * @var Satellite
     */
    private $satellite;

    public function __construct(string $a, Map $map, Satellite $satellite)
    {

        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search(string $name)
    {
        // ...
        $locationInfo = $this->map->findAddress($name);

        return $this->satellite->pinpoint($locationInfo);

    }
}