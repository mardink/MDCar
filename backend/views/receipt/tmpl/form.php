<?php
/*
 * @package MDContact
 * @copyright Copyright (c)2013 Martijn Hiddink / mardinkwebdesign.com
 * @license GNU General Public License version 2 or later
 */

defined('_JEXEC') or die();

// Load the Javascript framework for Joomla!
JHTML::_('behavior.framework');
JHTML::_('behavior.calendar');
JHTML::_('behavior.formvalidation');

$this->loadHelper('select');
$this->loadHelper('filtering');


?>
<form action="index.php" method="post" id="adminForm" class="form-validate">
	<input type="hidden" name="option" value="com_mdcar" />
	<input type="hidden" name="view" value="receipt" />
	<input type="hidden" name="task" value="edit" />
	<input type="hidden" name="mdcar_receipt_id" value="<?php echo $this->item->mdcar_receipt_id ?>" />
    <input type="hidden" name="<?php echo JFactory::getSession()->getFormToken();?>" value="1" />

        <div class="mdcar">
<h1 class="title"><?php echo JText::_('COM_MDCAR_RECEIPTS_GROUP_BASIC'); ?></h1>
<div class="content" >
<?php
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="container-fluid component_blok">
    <div class="row-fluid">
    <div class="control-group">
        <label for="published" class="control-label span4"><?php echo JText::_('JPUBLISHED'); ?></label>
        <div class="controls">
            <?php echo JHTML::_('select.booleanlist', 'enabled', null, $this->item->enabled); ?>
        </div>
    </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            <label for="kenteken" class="control-label" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_RECIEPTS_FIELD_KENTEKEN_DESC'); ?>"><?php echo JText::_('COM_MDCAR_RECIEPTS_FIELD_KENTEKEN'); ?>
            <div class="pull-right">
                <?php echo MdcarHelperSelect::cars($this->item->mdcar_car_id, 'mdcar_car_id') ?></label>
            </div>
        </div>
</div>
    <div class="row-fluid">
    <div class="control-group">
        <label for="tankdatum" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_CARS_FIELD_MERK_DESC'); ?>"><?php echo JText::_('COM_MDCAR_CARS_FIELD_MERK'); ?>
            <div class="pull-right">
            <?php echo JHTML::_('calendar', $this->item->tankdatum, 'tankdatum', 'tankdatum'); ?></label>
    </div>
    </div>
   </div>
            <div class="row-fluid">
            <div class="control-group">
                <label for="fuel" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_RECEIPTS_FIELD_WINTERBANDEN_DESC'); ?>"><?php echo JText::_('COM_MDCAR_RECEIPTS_FIELD_WINTERBANDEN'); ?>
                    <select class="pull-right" type="list" name="winterbanden" id="winterbanden" value="<?php echo $this->item->winterbanden ?>">
                        <option><?php echo JText::_('COM_MDCAR_RECEIPTS_FIELD_WINTERBANDEN_NO'); ?></option>
                        <option><?php echo JText::_('COM_MDCAR_RECEIPTS_FIELD_WINTERBANDEN_YES'); ?></option>
                    </select>
            </div>
    </div>
    <div class="row-fluid">
        <div class="control-group">
            <label for="kmstand_tank" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_KMSTAND_DESC'); ?>"><?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_KMSTAND'); ?>
                <input class="pull-right validate-numeric" type="text" name="kmstand_tank" id="kmstand_tank" class="required" value="<?php echo $this->item->kmstand_tank ?>"></label>
        </div>
    </div>
            <div class="row-fluid">
                <div class="control-group">
                    <label for="liters" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_LITERS_DESC'); ?>"><?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_LITERS'); ?>
                        <input class="pull-right validate-numeric" type="text" name="liters" id="liters" class="required" value="<?php echo $this->item->liters ?>"></label>
                </div>
            </div>
            <div class="row-fluid">
                <div class="control-group">
                    <label for="liter_prijs" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_PRICE_DESC'); ?>"><?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_PRICE'); ?>
                        <input class="pull-right validate-numeric" type="text" name="liter_prijs" id="liter_prijs" class="required" value="<?php echo $this->item->liter_prijs ?>"></label>
                </div>
            </div>
            <div class="row-fluid">
                <div class="control-group">
                    <label for="comment" class="control-label span4" data-toggle="tooltip" title="<?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_COMMENT_DESC'); ?>"><?php echo JText::_('COM_MDCAR_RECEIPT_FIELD_COMMENT'); ?>
                        <textarea type="textarea" rows="5" name="comment" id="comment" class="required pull-right" value="<?php echo $this->item->comment ?>"></textarea></label>
                </div>
            </div>
    </div>
</div>
</div>

</form>