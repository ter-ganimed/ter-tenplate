<?php
/**
 * @package     gantry
 * @subpackage  features
 * @version		3.2.19 April 2, 2012
 * @author		RocketTheme http://www.rockettheme.com
 * @copyright 	Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureStyleDeclaration extends GantryFeature {
    var $_feature_name = 'styledeclaration';

    function isEnabled() {
        global $gantry;
        $menu_enabled = $this->get('enabled');

        if (1 == (int)$menu_enabled) return true;
        return false;
    }

	function init() {
        global $gantry;

        //inline css for dynamic stuff
        $css  = 'body {background:'.$gantry->get('bgcolor').';}';
        $css .= 'body a {color:'.$gantry->get('linkcolor').';}';
        $css .= '#rt-top .rt-container {background-color:'.$gantry->get('topcolor').';}';
        $css .= '#rt-header .rt-container {background-color:'.$gantry->get('headercolor').';}';
        $css .= '#rt-main .rt-container {background-color:'.$gantry->get('maincolor').';}';
        $css .= '#rt-bottom .rt-container {background-color:'.$gantry->get('bottomcolor').';}';
        $css .= '#rt-footer .rt-container, #rt-copyright .rt-container, #rt-menu .rt-container {background-color:'.$gantry->get('footercolor').';}';

        
        $gantry->addInlineStyle($css);

        //style stuff
        $gantry->addStyle($gantry->get('cssstyle').".css");
	}

}