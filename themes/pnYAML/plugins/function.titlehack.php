<?php
// File: $Id$
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
 * PostNuke Title Hack
 * 
 * Show individual titles at your PostNuke pages. 
 * 
 * This file is a plugin for pnRender, the PostNuke implementation of Smarty
 * 
 * @package      TitleHack
 * @version      $Id$
 * @author       Joerg Napp <jnapp@users.sourceforge.net>
 * @link         http://lottasophie.sourceforge.net Official Support Site
 * @copyright    Copyright (C) 2003 Joerg Napp
 * @license      http://www.gnu.org/copyleft/gpl.html GNU General Public License
 *
 */ 
 
/**
 * Smarty function to obtain the title of a page.
 * 
 * Note that the plugin prints out a standard header if no
 * special header has been set. 
 * If the assign parameter is set, the return will be empty in 
 * this case. 
 * 
 * Available parameters:
 *   - assign:   If set, the results are assigned to the corresponding 
 *               variable instead of printed out
 *   - default:  The default title
 * 
 * Example
 * <title><!--[titlehack]--></title>
 * 
 * @author       Joerg Napp
 * @since        07.05.04
 * @param        array       $params      All attributes passed to this function from the template
 * @param        object      &$smarty     Reference to the Smarty object
 * @return       string      the title of the page
 */
function smarty_function_titlehack($params, &$smarty)
{ 
    // get the parameters
    extract($params);

    include_once 'includes/pnTitle.php';
    $pagetitle = pnModTitle();

    if (isset($assign)) {
        // return the results
        $smarty->assign($assign, $pagetitle);
        return;
    } 

    if ($pagetitle) {
        // the title hack returned a parameter
        return pnVarPrepHTMLDisplay($pagetitle);
    } 

    if (isset($default)) {
        // a default header was passed
        return $default;
    } 
    return pnConfigGetVar('sitename') . ' :: ' . pnConfigGetVar('slogan');
} 
?>