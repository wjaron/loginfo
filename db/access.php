<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    // display table.
    'local/loginfo' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes'   => array(
            'guest' => CAP_ALLOW,
            'user'  => CAP_ALLOW
        ),
    )
);
