<?php

require_once(dirname(__FILE__) . '/../../config.php'); 

require_login();                                              // 2
$context = context_system::instance();                        // 3

$PAGE->set_context($context);                                 // 8
$PAGE->set_url(new moodle_url('/local/loginfo/index.php'));
$PAGE->set_title(get_string('loginfo', 'local_loginfo'));       // 10

$output = $PAGE->get_renderer('local_loginfo');

//include 'db/classes/group_observers.php';


echo $output->display();

