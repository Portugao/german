<?php
/**
 * iPhone?
 *
 * @copyright (C) 2008, Steffen Voss
 */

function smarty_function_iphone($params, &$smarty)
{
    if ((stristr($_SERVER['HTTP_USER_AGENT'],'iPhone')) && ((SessionUtil::getVar('autoset') == 'on') || (SessionUtil::getVar('autoset') == null))) {
        SessionUtil::setVar('autoset', 'on');
	pnRedirect('index.php?newtheme=iphone');
    }
}
