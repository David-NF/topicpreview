<?php
/**
*
* topic_preview [Swedish]
*
* @package Topic Preview
* @version $Id$
* @copyright (c) 2010 Matt Friedman (Translated by Sysz via phpbb.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'TOPIC_PREVIEW'					=> 'Ämne Förhandsvisning',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Ämne Förhandsvisning visar ett kort utdrag av text från det första inlägget i en tipsruta när musen pekar över ett ämne titel.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Ämne Förhandsvisning inställningar',
	'TOPIC_PREVIEW_LENGTH'			=> 'Text längd på ämne förhandsvisning',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'Ange antalet tecken som ska visas i ämnet förhandsvisning tipsrutan (standard är 150). Att ställa in värdet till 0 inaktiverar den här funktionen.',
	'DISPLAY_TOPIC_PREVIEW'			=> 'Visa ämne förhandsvisningar',
	'TOPIC_PREVIEW_STRIP'			=> 'Göm BB-koder från ämne förhandsvisningar',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Listar Forumkoder med innehåll som du vill ta bort från förhandsvisningen (spoiler och dold text BB-Koder, exempelvis). Separera flera BB-koder med hjälp av | tecknet, till exempel: spoiler | dölj | kod',
	'TOPIC_PREVIEW_JQUERY'			=> 'Aktivera jQuery Ämne Förhandsvisning',
	'TOPIC_PREVIEW_AVATARS'			=> 'Visa visningsbilder (i Ämne Förhandsvisning)',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Visa “Senaste inlägget” text (i jQuery Ämne Förhandsvisning)',
	'CHARS'							=> 'Tecken',
	'FIRST_POST'					=> 'Första inlägget',
));

?>