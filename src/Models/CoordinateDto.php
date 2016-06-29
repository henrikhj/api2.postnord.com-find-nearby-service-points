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
class CoordinateDto implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var string|null $countryCode public property
     */
    public $countryCode;

    /**
     * @todo Write general description for this property
     * @var double|null $easting public property
     */
    public $easting;

    /**
     * @todo Write general description for this property
     * @var double|null $northing public property
     */
    public $northing;

    /**
     * @todo Write general description for this property
     * @var string|null $srId public property
     */
    public $srId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string|null       $countryCode   Initialization value for the property $this->countryCode
     * @param   double|null       $easting       Initialization value for the property $this->easting    
     * @param   double|null       $northing      Initialization value for the property $this->northing   
     * @param   string|null       $srId          Initialization value for the property $this->srId       
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->countryCode = func_get_arg(0);
            $this->easting     = func_get_arg(1);
            $this->northing    = func_get_arg(2);
            $this->srId        = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['countryCode'] = $this->countryCode;
        $json['easting']     = $this->easting;
        $json['northing']    = $this->northing;
        $json['srId']        = $this->srId;

        return $json;
    }
}