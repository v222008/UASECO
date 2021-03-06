<?php
/*
 * Class: Checkpoint
 * ~~~~~~~~~~~~~~~~~
 * » Stores checkpoint information for Players.
 *   Currently only used by plugins/plugin.checkpoints.php
 * » Based upon plugin.checkpoints.php from XAseco2/1.03 written by Xymph
 *
 * ----------------------------------------------------------------------------------
 *
 * LICENSE: This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ----------------------------------------------------------------------------------
 *
 */

/*
#///////////////////////////////////////////////////////////////////////#
#									#
#///////////////////////////////////////////////////////////////////////#
*/

class Checkpoint extends BaseClass {
	public $tracking	= array();
	public $best		= array();
	public $current		= array();


	/*
	#///////////////////////////////////////////////////////////////////////#
	#									#
	#///////////////////////////////////////////////////////////////////////#
	*/

	public function __construct () {

		$this->setAuthor('undef.de');
		$this->setVersion('1.0.0');
		$this->setBuild('2017-04-22');
		$this->setCopyright('2014 - 2017 by undef.de');
		$this->setDescription('Stores checkpoint information for Players.');

		$this->tracking['local_records']	= -1;			// -1 = off, 0 = own/last rec, 1-max = rec #1-max
		$this->tracking['dedimania_records']	= -1;			// -1 = off, 0 = own/last rec, 1-30 = rec #1-30
		$this->best['timestamp']		= 0;
		$this->best['finish']			= PHP_INT_MAX;
		$this->best['cps']			= array();
		$this->current['finish']		= PHP_INT_MAX;
		$this->current['cps']			= array();
	}
}

?>
