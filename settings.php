<?php

defined('MOODLE_INTERNAL') || die();

//include 'classes/admin_setting_configtext_validate.php';


if ( $hassiteconfig ){

    $settings = new admin_settingpage( 'local_loginfo', 'Loginfo Settings' );

    $ADMIN->add( 'localplugins', $settings );
    // ********* DATE **********
    $settings->add( new admin_setting_configtext('local_loginfo/dateformat', 'Date format', 'Date format fo CRON', 'd-M-Y', PARAM_TEXT) );
    $settings->add( new \local_loginfo\admin_setting_configtext_validate('local_loginfo/dumppath', 'Path', 'Path to dump file', '../loginfo/dump.csv', PARAM_TEXT) );

}