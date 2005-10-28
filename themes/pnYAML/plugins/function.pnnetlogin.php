<?php
/**
 * Xanthia plugin
 * 
 * This file is a plugin for pnRender, the PostNuke implementation of Smarty
 *
 * @package      Xanthia_Templating_Environment
 * @subpackage   Xanthia
 * @version      $Id$
 * @author       The PostNuke development team
 * @link         http://www.postnuke.com  The PostNuke Home Page
 * @copyright    Copyright (C) 2002 by the PostNuke Development Team
 * @license      http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */ 

 
/**
 * Smarty function to display the welcome message
 * 
 * Example
 * <!--[userlogin]-->
 * 
 * @author       larsneo
 * @since        14/12/03
 * @see          function.pnnetlogin.php::smarty_function_pnnetlogin()
 * @param        array       $params      All attributes passed to this function from the template
 * @param        object      &$smarty     Reference to the Smarty object
 * @return       string      the welcome message
 */
function smarty_function_pnnetlogin($params, &$smarty) 
{
    extract($params); 
	unset($params);

    // determine the current url so we can return the user to the correct place after login
    // Start of with REQUEST_URI
    if (isset($HTTP_SERVER_VARS['REQUEST_URI'])) {
        $path = $HTTP_SERVER_VARS['REQUEST_URI'];
    } else {
        $path = getenv('REQUEST_URI');
    }
    if ((empty($path)) ||
        (substr($path, -1, 1) == '/')) {
        // REQUEST_URI was empty or pointed to a path
        // Try looking at PATH_INFO
        $path = getenv('PATH_INFO');
        if (empty($path)) {
            // No luck there either
            // Try SCRIPT_NAME
            if (isset($HTTP_SERVER_VARS['SCRIPT_NAME'])) {
                $path = $HTTP_SERVER_VARS['SCRIPT_NAME'];
            } else {
                $path = getenv('SCRIPT_NAME');
            }
        }
    }

	if (!pnUserLoggedIn()) {
		$loginbox = '<span class="headmenu">[ <a href="user.php">Mitglied werden</a> ]&nbsp;&nbsp;&nbsp;'  
				.'<form style="display:inline" action="user.php" method="post">'
  				.'<span class="headmenu">&nbsp;<label for="uname_xte_plugin">' . pnVarPrepForDisplay(_NICKNAME) . '</label>: </span>'
				.'<input type="text" name="uname" id="uname_xte_plugin" size="14" maxlength="25">'
  				.'<span class="headmenu">&nbsp;<label for="pass_xte_plugin">' . pnVarPrepForDisplay(_PASSWORD) . '</label>: </span>'
				.'<input type="password" name="pass" id="pass_xte_plugin" size="14" maxlength="20">';
				
        if (pnConfigGetVar('seclevel') <> 'high') {
			$loginbox .= '  <input type="checkbox" value="1" name="rememberme" id="rememberme_xte_plugin">'
					.'  <span class="headmenu">&nbsp;<label for="rememberme_xte_plugin">' . pnVarPrepForDisplay(_REMEMBERME) . '</label></span>';
		}
				
		$loginbox .= '<input type="hidden" name="module" value="NS-User">'
				.'<input type="hidden" name="op" value="login">'
				.'<input type="hidden" name="url" value="' . pnVarPrepForDisplay($path) .'">'
				.' <input class="pn-button" type="submit" value="' . pnVarPrepForDisplay(_LOGIN) . '">'
				. '</form>';	
 	} else {
		$loginbox = '<span class="headmenu"><a href="user.php">Einstellungen</a> :: <a href="user.php?module=NS-User&amp;op=logout">Abmelden</a> :: <a href="Messages+main.html">Private Nachrichten</a> :: <a href="Members_List+main.html">Mitglieder-Liste</a> :: <a href="Stats+main.html">Stats</a></span>';
	}

    return $loginbox;
}
?>