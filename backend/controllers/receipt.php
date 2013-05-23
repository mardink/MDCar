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
    public function onBeforeSave() {
        $fuel = 'Lullo';
        $this->item->fuel = $fuel;
        return $this->item->fuel;
    }

}