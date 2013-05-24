<?php
/*
 * @package MDCar
 * @copyright Copyright (c)2013 Martijn Hiddink / mardinkwebdesign.com
 * @license GNU General Public License version 2 or later
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

class MdcarControllerReceipt extends FOFController
{
    public function onAfterSave() {
        $model = $this->getThisModel();
        $model->setIDsFromRequest();
        $id = $model->getId();
        $mdcar_car_id = $model->mdcar_car_id;

        // Get fuel type form car database
        $md_fuel = new MdcarModelReceipts;
        $fuel = $md_fuel->Fuel($mdcar_car_id);

        //get variables and store
        $item = $model->getItem();
        $key = $item->getKeyName();

        if($item->$key == $id)
        {
            $item->id = $id;
            $item->fuel = $fuel;
                    }
        $status = $model->save($item);

        return true;
    }

}