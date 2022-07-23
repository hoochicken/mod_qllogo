<?php
/**
 * @package		mod_qllogo
 * @copyright	Copyright (C) 2017 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;?>
<div class="sitename">
    <?php if(0!=$params->get('sitenameDisplay',1)):?>
        <a class="<?php echo $params->get('logoLinkClass','');?>" href="<?php echo $obj_helper->getLink(); ?>">
    <?php endif;?>
    <?php echo $obj_helper->getSitename();?>
    <?php if(0!=$params->get('sitenameDisplay',1)):?>
        </a>
    <?php endif;?>
</div>