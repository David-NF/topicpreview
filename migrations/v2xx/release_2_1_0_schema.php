<?php
/**
*
* @package Topic Preview
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace vse\topicpreview\migrations\v2xx;

class release_2_1_0_schema extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\vse\topicpreview\migrations\v2xx\release_2_0_0');
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'styles'	=> array(
					'topic_preview_theme'	=> array('VCHAR_UNI', 'light'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'styles'	=> array(
					'topic_preview_theme',
				),
			),
		);
	}
}
