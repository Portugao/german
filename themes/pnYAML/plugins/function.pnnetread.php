<?php
function smarty_function_pnnetread($params, &$smarty)
{ 
    // get the parameters
    extract($params); 
	unset($params);
	
    if (!isset($sid)) {
        $smarty->trigger_error('pnnetread: attribute sid required');
        return false;
    }    

	// set default
	$pnnetread = "";
	
	// Security check
	if (!pnSecAuthAction(0, 'Stories::Story', "::$sid", ACCESS_READ)) {
		return $pnnetread;
	} 
	$title = strip_tags($title);
	if (pnModAvailable('News'))	{
		$pnnetread = "<a href=\"Article".$sid.".htm\" title=\"Beitrag ".pnVarPrepHTMLDisplay($title)." weiterlesen\">\"".pnVarPrepHTMLDisplay($title)."\" weiterlesen</a>.";
	}
    if (isset($assign)) {
        $smarty->assign($assign, $pnnetread);
    } else {
        return $pnnetread;        
    }
} 
?>