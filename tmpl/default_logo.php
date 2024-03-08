<?php
/**
 * @package        mod_qllogo
 * @copyright    Copyright (C) 2023 ql.de All rights reserved.
 * @author        Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */
/** @var \Joomla\Registry\Registry $params */
/** @var stdClass $module */
/** @var modQllogoHelper $qllogoHelper */
/** @var string $logoTarget */
// no direct access
defined('_JEXEC') or die;
?>
<div class="logo">
    <?php if (0 < $params->get('logoLink', 1)): ?>
    <a target="<?= $logoTarget ?>" class="<?= $params->get('logoLinkClass', ''); ?>" href="<?= $qllogoHelper->getLink(); ?>">
        <?php endif; ?>
        <img alt="<?= $qllogoHelper->getSitename(); ?>" src="<?= $params->get('logoImage'); ?>"/>
        <?php if (0 < $params->get('logoLink', 1)): ?>
    </a>
<?php endif; ?>
</div>