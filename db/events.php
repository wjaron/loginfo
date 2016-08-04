<?php


/*
$event = \mod_myplugin\event\something_happened::create(array('context' => $context, 'objectid' => YYY, 'other' => ZZZ));
// ... code that may add some record snapshots
$event->trigger();

 */

$observers = array(
    array(
        'eventname'   => '\core\event\user_loggedin',
        'callback'    => '\local_loginfo\group_observers::user_loggedin',
        //'includefile' => '/local/loginfo/lib.php',
    ),
    array(
        'eventname'   => 'core\event\user_enrolment_created',
        'callback'    => '\local_loginfo\group_observers::user_enrolment_created',
    )
);