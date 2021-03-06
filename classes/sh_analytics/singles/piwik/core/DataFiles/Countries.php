<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: Countries.php 1528 2009-10-22 17:45:23Z vipsoft $
 *
 * @category Piwik
 * @package DataFiles
 */

/**
 * Country code and continent database.
 * If you want to add a new entry, please email us at hello at piwik.org
 */
if(!isset($GLOBALS['Piwik_CountryList']))
{
	// Reference: ISO 3166-1 alpha-2
	$GLOBALS['Piwik_CountryList'] = array(
			'xx' => 'unk',
			'ad' => 'eur',
			'ae' => 'asi',
			'af' => 'asi',
			'ag' => 'ams',
			'ai' => 'ams',
			'al' => 'eur',
			'am' => 'asi',
			'an' => 'ams',
			'ao' => 'afr',
			'aq' => 'oce',
			'ar' => 'ams',
			'as' => 'oce',
			'at' => 'eur',
			'au' => 'oce',
			'aw' => 'ams',
			'ax' => 'eur',
			'az' => 'asi',
			'ba' => 'eur',
			'bb' => 'ams',
			'bd' => 'asi',
			'be' => 'eur',
			'bf' => 'afr',
			'bg' => 'eur',
			'bh' => 'asi',
			'bi' => 'afr',
			'bj' => 'afr',
			'bl' => 'ams',
			'bm' => 'ams',
			'bn' => 'asi',
			'bo' => 'ams',
			'br' => 'ams',
			'bs' => 'ams',
			'bt' => 'asi',
			'bv' => 'oce',
			'bw' => 'afr',
			'by' => 'eur',
			'bz' => 'ams',
			'ca' => 'amn',
			'cc' => 'oce',
			'cd' => 'afr',
			'cf' => 'afr',
			'cg' => 'afr',
			'ch' => 'eur',
			'ci' => 'afr',
			'ck' => 'asi',
			'cl' => 'ams',
			'cm' => 'afr',
			'cn' => 'asi',
			'co' => 'ams',
			'cr' => 'ams',
			'cu' => 'ams',
			'cv' => 'afr',
			'cx' => 'oce',
			'cy' => 'eur',
			'cz' => 'eur',
			'de' => 'eur',
			'dj' => 'afr',
			'dk' => 'eur',
			'dm' => 'ams',
			'do' => 'ams',
			'dz' => 'afr',
			'ec' => 'ams',
			'ee' => 'eur',
			'eg' => 'afr',
			'eh' => 'afr',
			'er' => 'afr',
			'es' => 'eur',
			'et' => 'afr',
			'fi' => 'eur',
			'fj' => 'oce',
			'fk' => 'ams',
			'fm' => 'oce',
			'fo' => 'eur',
			'fr' => 'eur',
			'ga' => 'afr',
			'gb' => 'eur',
			'gd' => 'ams',
			'ge' => 'asi',
			'gf' => 'ams',
			'gg' => 'eur',
			'gh' => 'afr',
			'gi' => 'afr',
			'gl' => 'amn',
			'gm' => 'afr',
			'gn' => 'afr',
			'gp' => 'ams',
			'gq' => 'afr',
			'gr' => 'eur',
			'gs' => 'eur',
			'gt' => 'ams',
			'gu' => 'asi',
			'gw' => 'afr',
			'gy' => 'ams',
			'hk' => 'asi',
			'hm' => 'oce',
			'hn' => 'ams',
			'hr' => 'eur',
			'ht' => 'ams',
			'hu' => 'eur',
			'id' => 'asi',
			'ie' => 'eur',
			'il' => 'asi',
			'im' => 'eur',
			'in' => 'asi',
			'io' => 'asi',
			'iq' => 'asi',
			'ir' => 'asi',
			'is' => 'eur',
			'it' => 'eur',
			'je' => 'eur',
			'jm' => 'ams',
			'jo' => 'asi',
			'jp' => 'asi',
			'ke' => 'afr',
			'kg' => 'asi',
			'kh' => 'asi',
			'ki' => 'oce',
			'km' => 'afr',
			'kn' => 'ams',
			'kp' => 'asi',
			'kr' => 'asi',
			'kw' => 'asi',
			'ky' => 'ams',
			'kz' => 'asi',
			'la' => 'asi',
			'lb' => 'asi',
			'lc' => 'ams',
			'li' => 'eur',
			'lk' => 'asi',
			'lr' => 'afr',
			'ls' => 'afr',
			'lt' => 'eur',
			'lu' => 'eur',
			'lv' => 'eur',
			'ly' => 'afr',
			'ma' => 'afr',
			'mc' => 'eur',
			'md' => 'eur',
			'me' => 'eur',
			'mf' => 'ams',
			'mg' => 'afr',
			'mh' => 'oce',
			'mk' => 'eur',
			'ml' => 'afr',
			'mm' => 'asi',
			'mn' => 'asi',
			'mo' => 'asi',
			'mp' => 'asi',
			'mq' => 'ams',
			'mr' => 'afr',
			'ms' => 'ams',
			'mt' => 'eur',
			'mu' => 'afr',
			'mv' => 'asi',
			'mw' => 'afr',
			'mx' => 'ams',
			'my' => 'asi',
			'mz' => 'afr',
			'na' => 'afr',
			'nc' => 'oce',
			'ne' => 'afr',
			'nf' => 'oce',
			'ng' => 'afr',
			'ni' => 'ams',
			'nl' => 'eur',
			'no' => 'eur',
			'np' => 'asi',
			'nr' => 'oce',
			'nu' => 'oce',
			'nz' => 'oce',
			'om' => 'asi',
			'pa' => 'ams',
			'pe' => 'ams',
			'pf' => 'oce',
			'pg' => 'oce',
			'ph' => 'asi',
			'pk' => 'asi',
			'pl' => 'eur',
			'pm' => 'amn',
			'pn' => 'oce',
			'pr' => 'ams',
			'ps' => 'asi',
			'pt' => 'eur',
			'pw' => 'oce',
			'py' => 'ams',
			'qa' => 'asi',
			're' => 'afr',
			'ro' => 'eur',
			'rs' => 'eur',
			'ru' => 'eur',
			'rw' => 'afr',
			'sa' => 'asi',
			'sb' => 'oce',
			'sc' => 'afr',
			'sd' => 'afr',
			'se' => 'eur',
			'sg' => 'asi',
			'sh' => 'afr',
			'si' => 'eur',
			'sj' => 'eur',
			'sk' => 'eur',
			'sl' => 'afr',
			'sm' => 'eur',
			'sn' => 'afr',
			'so' => 'afr',
			'sr' => 'ams',
			'st' => 'afr',
			'sv' => 'ams',
			'sy' => 'asi',
			'sz' => 'afr',
			'tc' => 'ams',
			'td' => 'afr',
			'tf' => 'oce',
			'tg' => 'afr',
			'th' => 'asi',
			'tj' => 'asi',
			'tk' => 'oce',
			'tl' => 'asi',
			'tm' => 'asi',
			'tn' => 'afr',
			'to' => 'oce',
			'tr' => 'eur',
			'tt' => 'ams',
			'tv' => 'asi',
			'tw' => 'asi',
			'tz' => 'afr',
			'ua' => 'eur',
			'ug' => 'afr',
			'um' => 'oce',
			'us' => 'amn',
			'uy' => 'ams',
			'uz' => 'asi',
			'va' => 'eur',
			'vc' => 'ams',
			've' => 'ams',
			'vg' => 'ams',
			'vi' => 'ams',
			'vn' => 'asi',
			'vu' => 'oce',
			'wf' => 'oce',
			'ws' => 'asi',
			'ye' => 'asi',
			'yt' => 'afr',
			'za' => 'afr',
			'zm' => 'afr',
			'zw' => 'afr',

			// exceptionally reserved
			'ac' => 'afr', // .ac TLD
			'cp' => 'ams',
			'dg' => 'asi',
			'ea' => 'afr',
			'eu' => 'eur', // .eu TLD
			'fx' => 'eur',
			'ic' => 'afr',
			'su' => 'eur', // .su TLD
			'ta' => 'afr',
			'uk' => 'eur', // .uk TLD

			// transitionally reserved
			'bu' => 'asi',
			'cs' => 'eur', // former Serbia and Montenegro
			'nt' => 'asi',
			'sf' => 'eur',
			'tp' => 'oce', // .tp TLD
			'yu' => 'eur', // .yu TLD
			'zr' => 'afr',
		);
}
