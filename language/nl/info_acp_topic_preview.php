<?php
/**
*
* info_acp_topic_preview [Dutch]
*
* @package language
* @copyright (c) 2013 Matt Friedman - Erik Frèrejean ( erikfrerejean@phpbb.com ) http://www.erikfrerejean.nl
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TOPIC_PREVIEW'					=> 'Topic Voorbeeld',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Er zal een voorbeeld van het topic worden weergegeven zolang de muis boven de titel van het onderwerp gehouden wordt.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Topic voorbeeld instellingen',
	'TOPIC_PREVIEW_DISPLAY'			=> 'Laat het topic voorbeeld zien',
	'TOPIC_PREVIEW_LENGTH'			=> 'Lengte van de topic voorbeeld tekst',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'Geef hier aan hoeveel tekens er voor het voorbeeld gebruikt dienen te worden (standaard 150). Door deze waarde op 0 te zetten wordt deze functie uitgezet',
	'TOPIC_PREVIEW_STRIP'			=> 'BBCodes die niet gebruikt worden in het voorbeeld',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Geef hier aan welde BBCodes je wilt verwijderen van het voorbeeld (bijvoorbeeld spoiler and verborgen text BBCodes). BBCodes worden gescheiden door het "|" teken, bijvoorbeeld: spoiler|hide|code',
	'TOPIC_PREVIEW_AVATARS'			=> 'Weer avatars in topic voorbeeld',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Include “Last post” text in topic previews',
	'CHARS'							=> 'Tekens',

	'TOPIC_PREVIEW_STYLE_SETTINGS'	=> 'Topic preview style settings',
	'TOPIC_PREVIEW_WIDTH'			=> 'Width of topic previews (in pixels)',
	'TOPIC_PREVIEW_DELAY'			=> 'Delay before showing topic previews (in milliseconds)',
	'TOPIC_PREVIEW_DRIFT'			=> 'Animated drift effect (in pixels)',
	'TOPIC_PREVIEW_DRIFT_EXPLAIN'	=> 'Amount of vertical animation on fadeout (use negative values to change direction).',
	'TOPIC_PREVIEW_THEME'			=> 'Theme for %s',
	'TOPIC_PREVIEW_THEME_EXPLAIN'	=> 'Choose a topic preview theme for %s.',
	'THEME'							=> 'theme',
	'MILLISECOND'					=> 'ms',
));
