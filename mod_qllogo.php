<?php
/**
 * @package        mod_qllogo
 * @copyright    Copyright (C) 2023 ql.de All rights reserved.
 * @author        Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

/** @var \Joomla\Registry\Registry $params */
/** @var stdClass $module */
// no direct access
defined('_JEXEC') or die;
//echo '<pre>';print_r($params);die;
if (1 > $params->get('sitenameDisplay', 1) && 1 > $params->get('logoDisplay', 1)) return;
require_once dirname(__FILE__) . '/helper.php';
$qllogoHelper = new modQllogoHelper($module, $params);
JFactory::getDocument()->addStyleDeclaration($qllogoHelper->getStyles());
require JModuleHelper::getLayoutPath('mod_qllogo', $params->get('layout', 'default'));