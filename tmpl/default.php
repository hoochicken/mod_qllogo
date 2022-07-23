<?php
/**
 * @package		mod_qllogo
 * @copyright	Copyright (C) 2017 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="qllogo moduleId<?php echo $module->id;?>">
<?php
if(0<$params->get('sitenameDisplay',1) AND 1==$params->get('sitenamePosition',1)) require JModuleHelper::getLayoutPath('mod_qllogo', 'default_sitename');
if(0<$params->get('logoDisplay',1)) require JModuleHelper::getLayoutPath('mod_qllogo', 'default_logo');
if(0<$params->get('sitenameDisplay',1) AND 2==$params->get('sitenamePosition',1)) require JModuleHelper::getLayoutPath('mod_qllogo', 'default_sitename');
?>
</div>