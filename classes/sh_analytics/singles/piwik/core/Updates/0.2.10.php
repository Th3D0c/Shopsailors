<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: 0.2.10.php 1589 2009-11-16 01:35:45Z vipsoft $
 *
 * @category Piwik
 * @package Updates
 */

/**
 * @package Updates
 */
class Piwik_Updates_0_2_10 implements Piwik_iUpdate
{
	static function update()
	{
		$tables = Piwik::getTablesCreateSql();
		Piwik_Updater::updateDatabase(__FILE__, array(
			$tables['option'] => false,
		));

		Piwik_Updater::updateDatabase(__FILE__, array(
			// 0.1.7 [463]
			'ALTER IGNORE TABLE `'. Piwik::prefixTable('log_visit') .'`
				 CHANGE `location_provider` `location_provider` VARCHAR( 100 ) DEFAULT NULL' => '1054',
			// 0.1.7 [470]
			'ALTER TABLE `'. Piwik::prefixTable('logger_api_call') .'`
				CHANGE `parameter_names_default_values` `parameter_names_default_values` TEXT,
				CHANGE `parameter_values` `parameter_values` TEXT,
				CHANGE `returned_value` `returned_value` TEXT' => false,
			'ALTER TABLE `'. Piwik::prefixTable('logger_error') .'`
				CHANGE `message` `message` TEXT' => false,
			'ALTER TABLE `'. Piwik::prefixTable('logger_exception') .'`
				CHANGE `message` `message` TEXT' => false,
			'ALTER TABLE `'. Piwik::prefixTable('logger_message') .'`
				CHANGE `message` `message` TEXT' => false,
			// 0.2.2 [489]
			'ALTER IGNORE TABLE `'. Piwik::prefixTable('site') .'`
				 CHANGE `feedburnerName` `feedburnerName` VARCHAR( 100 ) DEFAULT NULL' => '1054',
		));

		$obsoleteFile = '/plugins/ExamplePlugin/API.php';
		if(file_exists(PIWIK_INCLUDE_PATH . $obsoleteFile))
		{
			@unlink(PIWIK_INCLUDE_PATH . $obsoleteFile);
		}

		$obsoleteDirectories = array(
			'/plugins/AdminHome',
			'/plugins/Home',
			'/plugins/PluginsAdmin',
		);
		foreach($obsoleteDirectories as $dir)
		{
			if(file_exists(PIWIK_INCLUDE_PATH . $dir))
			{
				Piwik::unlinkRecursive(PIWIK_INCLUDE_PATH . $dir, true);
			}
		}
	}
}
