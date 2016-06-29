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
class ServicePointDto implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var CoordinateDto $coordinate public property
     */
    public $coordinate;

    /**
     * @todo Write general description for this property
     * @required
     * @var AddressDto $deliveryAddress public property
     */
    public $deliveryAddress;

    /**
     * @todo Write general description for this property
     * @var DropOffTimeDto|null $dropOffTime public property
     */
    public $dropOffTime;

    /**
     * @todo Write general description for this property
     * @var string|null $handlingOffice public property
     */
    public $handlingOffice;

    /**
     * @todo Write general description for this property
     * @var string|null $locationDetail public property
     */
    public $locationDetail;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @var OpeningHoursDto|null[] $openingHour public property
     */
    public $openingHour;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $routeDistance public property
     */
    public $routeDistance;

    /**
     * @todo Write general description for this property
     * @var string|null $routingCode public property
     */
    public $routingCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $servicePointId public property
     */
    public $servicePointId;

    /**
     * @todo Write general description for this property
     * @required
     * @var AddressDto $visitingAddress public property
     */
    public $visitingAddress;

    /**
     * Constructor to set initial or default values of member properties
     * @param   CoordinateDto     $coordinate        Initialization value for the property $this->coordinate     
     * @param   AddressDto        $deliveryAddress   Initialization value for the property $this->deliveryAddress
     * @param   DropOffTimeDto|null   $dropOffTime       Initialization value for the property $this->dropOffTime    
     * @param   string|null       $handlingOffice    Initialization value for the property $this->handlingOffice 
     * @param   string|null       $locationDetail    Initialization value for the property $this->locationDetail 
     * @param   string            $name              Initialization value for the property $this->name           
     * @param   array|null        $openingHour       Initialization value for the property $this->openingHour    
     * @param   integer           $routeDistance     Initialization value for the property $this->routeDistance  
     * @param   string|null       $routingCode       Initialization value for the property $this->routingCode    
     * @param   string            $servicePointId    Initialization value for the property $this->servicePointId 
     * @param   AddressDto        $visitingAddress   Initialization value for the property $this->visitingAddress
     */
    public function __construct()
    {
        if(11 == func_num_args())
        {
            $this->coordinate      = func_get_arg(0);
            $this->deliveryAddress = func_get_arg(1);
            $this->dropOffTime     = func_get_arg(2);
            $this->handlingOffice  = func_get_arg(3);
            $this->locationDetail  = func_get_arg(4);
            $this->name            = func_get_arg(5);
            $this->openingHour     = func_get_arg(6);
            $this->routeDistance   = func_get_arg(7);
            $this->routingCode     = func_get_arg(8);
            $this->servicePointId  = func_get_arg(9);
            $this->visitingAddress = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['coordinate']      = $this->coordinate;
        $json['deliveryAddress'] = $this->deliveryAddress;
        $json['dropOffTime']     = $this->dropOffTime;
        $json['handlingOffice']  = $this->handlingOffice;
        $json['locationDetail']  = $this->locationDetail;
        $json['name']            = $this->name;
        $json['openingHour']     = $this->openingHour;
        $json['routeDistance']   = $this->routeDistance;
        $json['routingCode']     = $this->routingCode;
        $json['servicePointId']  = $this->servicePointId;
        $json['visitingAddress'] = $this->visitingAddress;

        return $json;
    }
}