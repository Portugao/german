<?php
/**
 * iPhone?
 *
 * @copyright (C) 2008, Steffen Voss
 */

function smarty_function_iphoneOff($params, &$smarty)
{
    if (FormUtil::getPassedValue('normal') == 'on') {
	SessionUtil::setVar('autoset', 'off');
	pnRedirect('index.php?newtheme=ff2008');
    }
}