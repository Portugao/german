<?php
// File: $Id: function.ezcommentscounter.php
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
/**
 * Smarty function to obtain the EZComments counter
 * 
 * @author       Andreas Krapohl
 * @since        15.07.04
 * @param        array       $params      All attributes passed to this function from the template
 * @param        object      &$smarty     Reference to the Smarty object
 * @return       string      the comments counter
 */
function smarty_function_ezcommentscounter($params, &$smarty)
{ 
    // get the parameters
    extract($params); 
	unset($params);
	
    if (!isset($sid)) {
        $smarty->trigger_error('ezcommentscounter: attribute sid required');
        return false;
    }    

	// set default
	$ezcommentscounter = "";
	
	// Security check
	if (!pnSecAuthAction(0, 'EZComments::', "News:$sid:", ACCESS_READ)) {
		return $ezcommentsounter;
	} 

	if (pnModAvailable('EZComments'))	{
		list($dbconn) = pnDBGetConn();
		$pntable = pnDBGetTables();
		$EZCommentstable = $pntable['EZComments'];
		$EZCommentscolumn = &$pntable['EZComments_column']; 
		$sql = "SELECT COUNT(1)
    	        FROM $EZCommentstable
        	    WHERE $EZCommentscolumn[modname] = 'News'
            	  AND $EZCommentscolumn[objectid] = '$sid'";
		$result =& $dbconn->Execute($sql);
	    list($ezcommentscounter) = $result->fields;
		
		if ($ezcommentscounter=="0") $comments = "noch keine Kommentare";		    
		elseif ($ezcommentscounter=="1") $comments = "1 Kommentar";
		else $comments = "$ezcommentscounter Kommentare";
		
	}
    if (isset($assign)) {
        $smarty->assign($assign, $comments);
    } else {
        return $comments;        
    }
} 
?>