<?php
function Users_ajax_noobthemeSetAdmin() {
    $newstate = FormUtil::getPassedValue('newstate', null, 'POST');
    SessionUtil::setVar('AdminOff', $newstate, '/', true, true);
    return true;
}