<?php
/*
 * @package MDContact
 * @copyright Copyright (c)2013 Martijn Hiddink / mardinkwebdesign.com
 * @license GNU General Public License version 2 or later
 */

defined('_JEXEC') or die();

// Load the Javascript framework for Joomla!
JHTML::_('behavior.framework');

?>
<form action="index.php" method="post" id="adminForm" class="form-validate">
	<input type="hidden" name="option" value="com_mdcar" />
	<input type="hidden" name="view" value="car" />
	<input type="hidden" name="task" value="edit" />
	<input type="hidden" name="mdcar_car_id" value="<?php echo $this->item->mdcar_car_id ?>" />
	<input type="hidden" name="<?php echo JFactory::getSession()->getFormToken();?>" value="1" />
<div class="mdcar">
<h1 class="title"><?php echo JText::_('COM_MDCAR_CARS_GROUP_BASIC'); ?></h1>
<div class="content" >
<?php
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="container-fluid component_blok">
    <div class="row-fluid">
    <div class="control-group">
        <label for="kenteken" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_CARS_FIELD_KENTEKEN_DESC'); ?>"><?php echo JText::_('COM_MDCAR_CARS_FIELD_KENTEKEN'); ?>
        <input class="pull-right" type="text" name="kenteken" id="kenteken" value="<?php echo $this->item->kenteken ?>"></label>
    </div>
</div>
    <div class="row-fluid">
    <div class="control-group">
        <label for="merk" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_CARS_FIELD_MERK_DESC'); ?>"><?php echo JText::_('COM_MDCAR_CARS_FIELD_MERK'); ?>
        <input class="pull-right" type="text" name="merk" id="merk" value="<?php echo $this->item->merk ?>"></label>
    </div>
   </div>
    <div class="row-fluid">
        <div class="control-group">
            <label for="type" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_CARS_FIELD_TYPE_DESC'); ?>"><?php echo JText::_('COM_MDCAR_CARS_FIELD_TYPE'); ?>
                <input class="pull-right" type="text" name="type" id="type" value="<?php echo $this->item->type ?>"></label>
        </div>
    </div>
    <div class="row-fluid">
        <div class="control-group">
            <label for="kmstand_start" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_CARS_FIELD_KMSTAND_DESC'); ?>"><?php echo JText::_('COM_MDCAR_CARS_FIELD_KMSTAND'); ?>
                <input class="pull-right" type="text" name="kmstand_start" id="kmstand_start" value="<?php echo $this->item->kmstand_start ?>"></label>
        </div>
    </div>
    <div class="row-fluid">
        <div class="control-group">
            <label for="winterbandencorrectie" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_CARS_FIELD_WINTERBANDENCORRECTIE_DESC'); ?>"><?php echo JText::_('COM_MDCAR_CARS_FIELD_WINTERBANDENCORRECTIE'); ?>
                <input class="pull-right" type="text" name="winterbandencorrectie" id="winterbandencorrectie" value="<?php echo $this->item->winterbandencorrectie ?>"></label>
        </div>
    </div>
    </div>
</div>
</div>

</form>