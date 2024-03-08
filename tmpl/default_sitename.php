<?php
/**
 * @package        mod_qllogo
 * @copyright    Copyright (C) 2024 ql.de All rights reserved.
 * @author        Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
/** @var Joomla\Registry\ $params */
/** @var modQllogoHelper $qllogoHelper */

?>
<div class="sitename">
    <?php if (!$params->get('sitenameDisplay', 1)): ?>
    <a class="<?= $params->get('logoLinkClass', ''); ?>" href="<?= $qllogoHelper->getLink(); ?>">
        <?php endif; ?>
        <?= $qllogoHelper->getSitename(); ?>
        <?php if (0 != $params->get('sitenameDisplay', 1)): ?>
    </a>
<?php endif; ?>
</div>