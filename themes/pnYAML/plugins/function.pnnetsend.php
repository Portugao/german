<?php
function smarty_function_pnnetsend($params, &$smarty)
{ 
    // get the parameters
    extract($params); 
	unset($params);
	
    if (!isset($sid)) {
        $smarty->trigger_error('pnnetsend: attribute sid required');
        return false;
    }    

	// set default
	$pnnetsend = "";
	
	// Security check
	if (!pnSecAuthAction(0, 'Stories::Story', "::$sid", ACCESS_READ)) {
		return $pnnetsend;
	} 

	if (pnModAvailable('News'))	{
		$title=strip_tags($title);
		$pnnetsend = "<a href=\"SendArticle".$sid.".htm\"><img src=\"images/global/friend.gif\" height=\"11\" width=\"15\" alt=\"Beitrag ".pnVarPrepHTMLDisplay($title)." per E-Mail versenden\" /></a>";
	}
    if (isset($assign)) {
        $smarty->assign($assign, $pnnetsend);
    } else {
        return $pnnetsend;        
    }
} 
?>