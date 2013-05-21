<?php
/**
 * @package		MDCar
 * @copyright	Copyright (c)2013 Martijn Hiddink / MardinkWebdesign.com
 * @license		GNU General Public License version 2 or later
 */
defined('_JEXEC') or die();

class MdcarControllerCars extends FOFController
{
    protected function onBeforeBrowse()
    {
        return true;
    }
}