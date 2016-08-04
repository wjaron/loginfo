<?php

require_once(dirname(__FILE__) . '/../../../config.php');

global $DB;
$sql = 'SELECT * FROM mdl_local_loginfo ORDER BY id';
$result = $DB->get_records_sql($sql);

$fp = fopen('dump.csv', 'w');

foreach ($result as $fields) {
    fputcsv($fp,get_object_vars($fields));
}

fclose($fp);
