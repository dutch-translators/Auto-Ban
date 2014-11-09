<?php
/**
*
* Auto Ban [Dutch]
*
* @package language
* @version $Id$
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
		exit;
}
if (empty($lang) || !is_array($lang))
{
		$lang = array();
}
$lang = array_merge($lang, array(
	'AUTOBAN_ACTIVE'	=> 'Auto Ban',
	'AUTOBAN_ACTIVE_EXPLAIN'	=> 'Activeer bannen na een bepaald aantal waarschuwingen',
	'AUTOBAN_COUNT'	=> 'Waarschuwingen',
	'AUTOBAN_COUNT_EXPLAIN'	=> 'Na hoeveel waarschuwingen een gebruiker een ban krijgt',
	'AUTOBAN_DURATION'	=> 'Lengte ban',
	'AUTOBAN_DURATION_EXPLAIN'	=> 'Lengte in dagen voor de ban',
	'AUTOBAN_REASON'	=> 'Reden ban',
	'AUTOBAN_REASON_EXPLAIN'	=> 'Reden voor de ban'
));
