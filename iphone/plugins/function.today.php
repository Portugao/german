<?php
/**
 * iPhone?
 *
 * @copyright (C) 2008, Steffen Voss
 */

function smarty_function_today($params, &$smarty)
{
    $stampToday = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $todayTimestamp = DateUtil::makeTimestamp($stampToday);
    if (isset($params['assign'])) {
		$smarty->assign($params['assign'], $todayTimestamp);
	} else {
		return($todayTimestamp);
	}
}