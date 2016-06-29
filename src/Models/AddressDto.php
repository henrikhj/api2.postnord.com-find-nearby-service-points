<?php 
/*
 * Api2PostnordComFindNearbyServicePointsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 06/29/2016
 */

namespace Api2PostnordComFindNearbyServicePointsLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class AddressDto implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * @todo Write general description for this property
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @var string|null $streetName public property
     */
    public $streetName;

    /**
     * @todo Write general description for this property
     * @var string|null $streetNumber public property
     */
    public $streetNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string|null       $city           Initialization value for the property $this->city        
     * @param   string|null       $countryCode    Initialization value for the property $this->countryCode 
     * @param   string|null       $postalCode     Initialization value for the property $this->postalCode  
     * @param   string|null       $streetName     Initialization value for the property $this->streetName  
     * @param   string|null       $streetNumber   Initialization value for the property $this->streetNumber
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->city         = func_get_arg(0);
            $this->countryCode  = func_get_arg(1);
            $this->postalCode   = func_get_arg(2);
            $this->streetName   = func_get_arg(3);
            $this->streetNumber = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['city']         = $this->city;
        $json['countryCode']  = $this->countryCode;
        $json['postalCode']   = $this->postalCode;
        $json['streetName']   = $this->streetName;
        $json['streetNumber'] = $this->streetNumber;

        return $json;
    }
}