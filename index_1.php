<?php

require_once(dirname(__FILE__) . '/../../config.php'); 

require_login();                                              // 2
$context = context_system::instance();                        // 3

$PAGE->set_context($context);                                 // 8                             // 9
$PAGE->set_title(get_string('loginfo', 'local_loginfo'));       // 10

//echo $OUTPUT->header();
/////////////////////////////////////////////////////

$sql = 'SELECT firstname, lastname, id FROM mdl_user ORDER by id DESC LIMIT 5';

$result = $DB->get_records_sql($sql);
//var_dump($result);

function draw($result){
    $out = '';
    $out .= "<table>";
    foreach ($result as $object => $value){
        $out .= '<tr>';
        $out .= '<td>'.$value->id.'</td>';
        $out .= '<td>'.$value->firstname.'</td>';
        $out .= '<td>'.$value->lastname.'</td>';
        $out .= '<tr>';
    }
    $out .= "<table>";
    return $out;
}

echo draw($result);

///////////////////////////////////////////////////////
echo $OUTPUT->footer();          


