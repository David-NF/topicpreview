<?php
/**
*
* Topic Preview [Italian]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'TOPIC_PREVIEW'					=> 'Anteprima dei Topic',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Mostrer‡ una porzione del topic quando il mouse passer‡ sopra il titolo del topic.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Topic preview settings',
	'TOPIC_PREVIEW_LENGTH'			=> 'Lunghezza dell’anteprima',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'Inserisci il numero di caratteri da mostrare (default is 150). Se metti 0 disabiliti questa funzione.',
	'TOPIC_PREVIEW_STRIP'			=> 'BBCode da nascondere nell’anteprima',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Lista dei BBCode con i contenuti da rimuovere dall’anteprima. Separa i BBCode multipli usando il carattere |, ad esempio: spoiler|hide|code',
	'TOPIC_PREVIEW_AVATARS'			=> 'Display avatars in topic previews',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Include “Last post” text in topic previews',
	'CHARS'							=> 'Caratteri',

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
