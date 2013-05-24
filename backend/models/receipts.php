<?php
/*
 * @package MDCar
 * @copyright Copyright (c)2013 Martijn Hiddink / mardinkwebdesign.com
 * @license GNU General Public License version 2 or later
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

class MdcarModelReceipts extends FOFModel
{
public function Fuel($mdcar_car_id){
// setup a database connection
    $id = $mdcar_car_id;
    $db = $this->getDbo();

    $query = $db->getQuery(true)
        ->select('fuel')
        ->from($db->quoteName('#__mdcar_cars'))
        ->where($db->qn('mdcar_car_id').' = '.$db->q($id));
    // Reset the query using our newly populated query object.
    $db->setQuery($query);

// Load the results as a list of stdClass objects.
    $result = $db->loadObject();
    //$Fuel_car = 'dieseltje';
    $Fuel_car = $result->fuel;

    return $Fuel_car;
}
}