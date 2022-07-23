<?php
/**
 * @package        mod_qllogo
 * @copyright    Copyright (C) 2017 ql.de All rights reserved.
 * @author        Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
//echo '<pre>';print_r($params);die;
if (1 > $params->get('sitenameDisplay', 1) AND 1 > $params->get('logoDisplay', 1)) return;
require_once dirname(__FILE__) . '/helper.php';
$obj_helper = new modQllogoHelper($module, $params);
JFactory::getDocument()->addStyleDeclaration($obj_helper->getStyles());
require JModuleHelper::getLayoutPath('mod_qllogo', $params->get('layout', 'default'));