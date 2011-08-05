<?php
function smarty_function_explode($params, &$smarty) {
    
    $result = explode($params['separator'], $params['var']);
        
    $smarty->assign($params['assign'], $result);
}