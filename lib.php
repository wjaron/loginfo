<?php

defined('MOODLE_INTERNAL') || die();
require_once(dirname(dirname(__DIR__)) . '/config.php');

function local_loginfo_user_loggedin() {
    global $DB;
    
    $sql = 'SELECT l.*, u.username
    FROM mdl_user u
    left JOIN mdl_user_lastaccess l
    ON l.userid=u.id
    WHERE timeaccess IS NOT NULL';
    
    $result = $DB->get_records_sql($sql);
    
}

