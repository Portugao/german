<?php
function smarty_function_pnnetprint($params, &$smarty)
{ 
    // get the parameters
    extract($params); 
	unset($params);
	
    if (!isset($sid)) {
        $smarty->trigger_error('pnnetprint: attribute sid required');
        return false;
    }    

	// set default
	$pnnetprint = "";
	
	// Security check
	if (!pnSecAuthAction(0, 'Stories::Story', "::$sid", ACCESS_READ)) {
		return $pnnetprint;
	} 

	if (pnModAvailable('News'))	{
		$title=strip_tags($title);
		$pnnetprint = "<a href=\"PrintArticle".$sid.".htm\"><img src=\"images/global/print.gif\" height=\"11\" width=\"15\" alt=\"druckerfreundliche Ansicht von Beitrag ".pnVarPrepHTMLDisplay($title)."\" /></a>";
	}
    if (isset($assign)) {
        $smarty->assign($assign, $pnnetptint);
    } else {
        return $pnnetprint;        
    }
} 
?>