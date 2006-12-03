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

define('_ACTIVATEERROR','Fehler! Block konnte nicht aktiviert werden');
define('_DEACTIVATEERROR','Fehler! Block konnte nicht deaktiviert werden');
define('_DELETEERROR','Fehler! Block konnte nicht gelöscht werden');

// used for installation only
if(!defined('_BLOCKS_POSITIONALREADYEXISTS')) {
    define('_BLOCKS_POSITIONALREADYEXISTS', 'Eine Block-Position mit diesem Namen existiert bereits');
}
?>