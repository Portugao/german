<?php

function smarty_function_getactiveurl($params, &$smarty)
{
    // get the parameters
    extract($params);
	unset($params);

    $baseuri = pnGetBaseURI() . '/';
    $currenturi = pnGetCurrentURI();

    // sanitize
    $currenturi = str_replace('?newlang=eng', '', $currenturi);
    $currenturi = str_replace('?newlang=deu', '', $currenturi);

    $uri = html_entity_decode(substr($currenturi, strlen($baseuri), strlen($currenturi) - strlen($baseuri)));

    $menu_urls = array('index.php',
                       'index.php',
                       'index.php?module=pnForum',
                       'index.php?module=Downloads',
                       'index.php?module=Web_Links',
                       'index.php?module=formicula' );
    $ids = array(0,
                 0,
                 0,
                 0,
                 0,
                 0);
    // 2nd cycle to see if any submenu is open
    for($i=0; $i<count($menu_urls); $i++) {
        if($menu_urls[$i] == $uri) {
            $ids[$i) = 1;
        }
    }

    $smarty->assign('menuids', $ids);

}

?>