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
class DropOffTimeDto implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var DropOffTimeDatas|null $dropOffTimeDatas public property
     */
    public $dropOffTimeDatas;

    /**
     * Constructor to set initial or default values of member properties
     * @param   DropOffTimeDatas|null   $dropOffTimeDatas   Initialization value for the property $this->dropOffTimeDatas
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->dropOffTimeDatas = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['dropOffTimeDatas'] = $this->dropOffTimeDatas;

        return $json;
    }
}