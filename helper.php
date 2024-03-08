<?php
/**
 * @package        mod_qllogo
 * @copyright      Copyright (C) 2024 ql.de All rights reserved.
 * @author         Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\Registry\Registry;

defined('_JEXEC') or die;

class modQllogoHelper
{
    public Registry $params;
    public stdClass $module;

    function __construct($module, $params)
    {
        $this->module = $module;
        $this->params = $params;
    }

    public function getLinkHome()
    {
        return URI::base();
    }

    public function getSitename()
    {
        if (2 === (int)$this->params->get('sitenameDisplay')) return $this->params->get('sitenameAlternative');
        return Factory::getApplication()->getConfig()->get('sitename');
    }

    public function getLink()
    {
        if (2 === (int)$this->params->get('logoLink')) return $this->params->get('logoLinkAlternative');
        return $this->getLinkHome();
    }

    public function getStyles()
    {
        $styles = [];
        $styles[] = sprintf('.qllogo.moduleId%s { float:%s;}', $this->module->id, $this->params->get('logoFloat', ''));
        $styles[] = sprintf('.qllogo.moduleId%s a { display:block;float:%s;}', $this->module->id, $this->params->get('logoFloat', ''));
        $styles[] = sprintf('.qllogo.moduleId%s div { display:block;float:%s;}', $this->module->id, $this->params->get('logoFloat', ''));
        $styles[] = '.qllogo.moduleId' . $this->module->id . ' .logo img';
        $styles[] = '{';
        $styles[] = 'display:block;float:' . $this->params->get('logoFloat', '') . ';';
        if (is_numeric($this->params->get('logoWidth', 'auto'))) $styles[] = 'width:' . $this->params->get('logoWidth', 'auto') . 'px;';
        else $styles[] = ' width:' . $this->params->get('logoWidth', 'auto') . ';';
        if (is_numeric($this->params->get('logoHeight', 'auto'))) $styles[] = 'height:' . $this->params->get('logoHeight', 'auto') . 'px;';
        else $styles[] = ' height:' . $this->params->get('logoHeight', 'auto') . ';';
        $styles[] = '}';
        if (1 == $this->params->get('useStyles', 0)) {
            $styles[] = '.qllogo.moduleId' . $this->module->id . ' .sitename a';
            if ('' != trim($this->params->get('logoLinkClass', ''))) $styles[] = ',.qllogo.moduleId' . $this->module->id . ' .sitename a.' . $this->params->get('logoLinkClass', '');
            $styles[] = '{';
            $styles[] = 'font-family:\'' . $this->params->get('sitenameFont', 'Arial') . '\',Arial;';
            $styles[] = 'font-size:' . $this->params->get('sitenameFontsize', '25') . 'px;';
            if ('' != $this->params->get('sitenameColor')) $styles[] = 'color:' . $this->params->get('sitenameColor') . ';';
            if ('' != $this->params->get('sitenameBackground')) $styles[] = 'background:' . $this->params->get('sitenameBackground') . ';';
            $styles[] = 'letter-spacing:' . $this->params->get('sitenameLetterspacing', '0') . 'px;';
            $styles[] = 'letter-spacing:' . $this->params->get('sitenameLetterspacing', '0') . 'px;';
            if ('uppercase' == $this->params->get('sitenameFontvariant', '') or 'lowercase' == $this->params->get('sitenameFontvariant', '')) $styles[] = 'text-transform:' . $this->params->get('sitenameFontvariant', '') . ';';
            if ('small-caps' == $this->params->get('sitenameFontvariant', '')) $styles[] = 'font-variant:' . $this->params->get('sitenameFontvariant', '') . ';';
            $styles[] = '}';
        }
        return implode("\n", $styles);
    }
}
