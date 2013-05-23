<?php
/*
 * @package MDContact
 * @copyright Copyright (c)2013 Martijn Hiddink / mardinkwebdesign.com
 * @license GNU General Public License version 2 or later
 */

defined('_JEXEC') or die();

class MdcarHelperSelect
{
    protected static function genericlist($list, $name, $attribs, $selected, $idTag)
    {
        if(empty($attribs))
        {
            $attribs = null;
        }
        else
        {
            $temp = '';
            foreach($attribs as $key=>$value)
            {
                $temp .= $key.' = "'.$value.'"';
            }
            $attribs = $temp;
        }

        return JHTML::_('select.genericlist', $list, $name, $attribs, 'value', 'text', $selected, $idTag);
    }

    public static function cars($selected = null, $id = 'mdcar-car_id', $attribs = array())
    {
       $items = FOFModel::getTmpInstance('Cars','MdcarModel')
        ->nobeunpub(1)
        ->getItemList(true);

       $options = array();
      $options[] = JHTML::_('select.option',0,'- '.JText::_('COM_MDCAR_COMMON_SELECT_LABEL').' -');
       if(count($items)) foreach($items as $item)
      {
          $options[] = JHTML::_('select.option',$item->mdcar_car_id,$item->kenteken);
      }
      return self::genericlist($options, $id, $attribs, $selected, $id);
    }
}