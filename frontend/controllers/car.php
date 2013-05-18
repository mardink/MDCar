<?php
/**
 * @package		MDCar
 * @copyright	Copyright (c)2013 Martijn Hiddink / MardinkWebdesign.com
 * @license		GNU General Public License version 2 or later
 */
defined('_JEXEC') or die();

class MdcarControllerCar extends FOFController
{
	protected function onAfterSave()
	{
			return true;
	}
}