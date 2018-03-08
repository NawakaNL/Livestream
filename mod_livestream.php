<?php
/**
 * Scouting Livestream
 *
 * @package    SIJ.Livestream
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.md
 */

// No direct access
defined('_JEXEC') or die;

$url = $params->get('url');
$title = $module->title;
$color = $params->get('color');

// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_livestream/tmpl/style.css');

require JModuleHelper::getLayoutPath('mod_livestream');
