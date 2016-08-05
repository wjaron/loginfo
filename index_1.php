<?php

require_once(dirname(__FILE__) . '/../../config.php'); 

require_login();                                              // 2
$context = context_system::instance();                        // 3

$PAGE->set_context($context);                                 // 8                             // 9
$PAGE->set_title(get_string('loginfo', 'local_loginfo'));       // 10

//echo $OUTPUT->header();
/////////////////////////////////////////////////////
echo 'here i am'.'<p>';
/*
global $DB;
        $sql = "SELECT * FROM mdl_local_loginfo ORDER BY id";
        $result = $DB->get_records_sql($sql);
        $fp = fopen('dump.csv', 'r');
        $dumpfile = array(fgetcsv($fp));
        
        $csv = array_map('str_getcsv', file('dump.csv'));
        var_dump($csv);
echo '</p>';
*/
global $DB;
        $sql = "SELECT * FROM mdl_local_loginfo ORDER BY id";
        $result = $DB->get_records_sql($sql);
        $fp = fopen('dump.csv', 'a+');
        var_dump($result);
        foreach ($result as $fields) {
            fputcsv($fp,get_object_vars($fields));
            var_dump($fp);
        }

        fclose($fp);
        
        $sqlpath = "SELECT value FROM mdl_config WHERE name = 'local_loginfopath'";
        $path = $DB->get_records_sql($sqlpath);
        
        var_dump($path);


//var_dump($result);

