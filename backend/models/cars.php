<?php
/*
 * @package MDContact
 * @copyright Copyright (c)2013 Martijn Hiddink / mardinkwebdesign.com
 * @license GNU General Public License version 2 or later
 */

defined('_JEXEC') or die();

class MdcarModelCars extends FOFModel
{
    public function buildQuery($overrideLimits = false)
    {
        $db = $this->getDbo();

        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__mdcar_cars'));

        $fltTitle		= $this->getState('kenteken', null, 'string');
        if($fltTitle) {
            $fltTitle = "%$fltTitle%";
            $query->where($db->qn('kenteken').' LIKE '.$db->q($fltTitle));
        }

        $fltAlias		= $this->getState('alias', null, 'string');
        if($fltAlias) {
            $query->where($db->qn('alias').' = '.$db->q($fltAlias));
        }

        $fltDescription	= $this->getState('merk', null, 'string');
        if($fltDescription) {
            $fltDescription = "%$fltDescription%";
            $query->where($db->qn('merk').' LIKE '.$db->q($fltDescription));
        }

        $fltVgroup		= $this->getState('vgroup', null, 'int');
        if($fltVgroup) {
            $query->where($db->qn('vgroup_id').' = '.$db->q($fltAlias));
        }

        $fltType		= $this->getState('type', null, 'cmd');
        if($fltType) {
            $query->where($db->qn('type').' = '.$db->q($fltType));
        }

        $fltAccess		= $this->getState('access', null, 'cmd');
        if($fltAccess) {
            $query->where($db->qn('access').' = '.$db->q($fltAccess));
        }

        $fltPublished	= $this->getState('enabled', null, 'cmd');
        if($fltPublished != '') {
            $query->where($db->qn('enabled').' = '.$db->q($fltPublished));
        }

        $fltNoBEUnpub	= $this->getState('nobeunpub', null, 'int');
        if($fltNoBEUnpub) {
            $query->where('NOT('.$db->qn('enabled').' = '.$db->q('0').')');
        }

        $fltLanguage	= $this->getState('language', null, 'cmd');
        $fltLanguage2	= $this->getState('language2', null, 'string');
        if($fltLanguage && ($fltLanguage != '*')) {
            $query->where($db->qn('language').' IN('.$db->q('*').','.$db->q($fltLanguage).')');
        } elseif($fltLanguage2) {
            $query->where($db->qn('language').' = '.$db->q($fltLanguage2));
        }

        $search = $this->getState('search',null);
        if($search)
        {
            $search = '%'.$search.'%';
            $query->where(
                '('.
                '('.$db->qn('kenteken').' LIKE '.$db->quote($search).') OR'.
                '('.$db->qn('merk').' LIKE '.$db->quote($search).')'.
                ')'
            );
        }

        $order = $this->getState('filter_order', 'ordering', 'cmd');
        if(!in_array($order, array_keys($this->getTable()->getData()))) $order = 'kenteken';
        $dir = $this->getState('filter_order_Dir', 'ASC', 'cmd');
        $query->order($order.' '.$dir);

        return $query;
    }

}