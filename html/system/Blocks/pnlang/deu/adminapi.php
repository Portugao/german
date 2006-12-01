<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: adminapi.php 20223 2006-10-08 13:14:03Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage Blocks
 */

define('_ACTIVATEERROR','Error! Sorry! Could not activate block');
define('_DEACTIVATEERROR','Error! Sorry! Could not deactivate block');
define('_DELETEERROR','Error! Sorry! Could not delete block');

// used for installation only
if(!defined('_BLOCKS_POSITIONALREADYEXISTS')) {
    define('_BLOCKS_POSITIONALREADYEXISTS', 'A block position of the same name already exists');
}
?>