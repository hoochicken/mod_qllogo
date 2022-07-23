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
<div class="logo">
    <?php if(0<$params->get('logoLink',1)):?>
        <a class="<?php echo $params->get('logoLinkClass','');?>" href="<?php echo $obj_helper->getLink(); ?>">
    <?php endif;?>
    <img alt="<?php echo $obj_helper->getSitename();?>" src="<?php echo $params->get('logoImage') ;?>" />
    <?php if(0<$params->get('logoLink',1)):?>
        </a>
    <?php endif;?>
</div>