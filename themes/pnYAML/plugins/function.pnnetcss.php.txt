<?php
function smarty_function_pnnetcss() 
{
	// set default when not already done
	if (pnSessionGetVar("pncss") == "") pnSessionSetVar("pncss", "1");

	// check for css change
    $pncss = pnVarCleanFromInput("pncss");
    if (isset($pncss) && $pncss != "0") {
		// news css defined via url parameter, check for valid pncss
		if($pncss != "1" && $pncss != "2" && $pncss != "3") $pncss=1; //only 1,2,3
		pnSessionSetVar("pncss", $pncss);
	}

	// get current css
	$currentcss = pnSessionGetVar("pncss");

	// print stylesheetlink
	echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"themes/pn-css/style/csslayout".$currentcss.".css\">\n";
	
	// ie compliance fix
	echo "<!-- compliance patch for microsoft browsers -->\n";
	echo "<!--[if lt IE 7]>\n";
	echo "<script src=\"themes/pn-css/style/ie7/ie7-core.js\" type=\"text/javascript\"></script>\n";
	echo "<script src=\"themes/pn-css/style/ie7/ie7-css2.js\" type=\"text/javascript\"></script>\n";
	echo "<script src=\"themes/pn-css/style/ie7/ie7-css3.js\" type=\"text/javascript\"></script>\n";
	echo "<![endif]-->\n"; 
	
	// another IE fix
	echo "<!--[if IE]><style>* {zoom: 1.0}</style><![endif]-->\n";
}
?>