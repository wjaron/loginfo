<?php

namespace local_loginfo;
defined('MOODLE_INTERNAL') || die();

class group_observers {
    
    public static function user_loggedin($event) {

        global $DB;

        $data = $event->get_data();
        $userid = $data['userid'];
        $username = $event->get_username();
        
        $record = new \stdClass();
        $record->userid = $userid;
        $record->username = $username;
        $record->time = time();
        
        $DB->insert_record('local_loginfo', $record);     
    }
    
    public static function user_enrolment_created($event) {
        
        $username = $event->get_username();
        $record = new \stdClass();
        $record->enroll = $username;
        
        $DB->insert_record('local_loginfo', $record);  
        
    }
}