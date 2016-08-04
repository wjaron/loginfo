<?php

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