<?php
/*
 * Api2PostnordComFindNearbyServicePointsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 06/29/2016
 */

namespace Api2PostnordComFindNearbyServicePointsLib;

use Api2PostnordComFindNearbyServicePointsLib\Controllers;

/**
 * Api2PostnordComFindNearbyServicePointsLib client class
 */
class Api2PostnordComFindNearbyServicePointsClient
{
 
    /**
     * Singleton access to API controller
     * @return Controllers\APIController The *Singleton* instance
     */
    public function getAPI()
    {
        return Controllers\APIController::getInstance();
    }
}