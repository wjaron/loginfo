<?php

namespace local_loginfo;
defined('MOODLE_INTERNAL') || die();


class group_observers {
    
    public static function user_loggedin($event) {
        //var_dump($event); //get_class_methods
        global $DB;
        
        // ['core\event\user_loggedin']
        $data = $event->get_data();
        $userid = $data['userid'];
        $username = $event->get_username();
        
        //var_dump($userid);
        //var_dump($username);
        //var_dump($data);
        $record = new \stdClass();
        $record->userid = $userid;
        $record->username = $username;
        $record->time = time();
        
        $DB->insert_record('local_loginfo', $record);
        
        //$sql = "INSERT INTO local_loginfo (userid, username, time) VALUES ($userid, $username, NOW())";
        //$DB->execute($sql);
        
    }
}