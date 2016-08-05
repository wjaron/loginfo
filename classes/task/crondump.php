<?php

namespace local_loginfo\task;

class crondump extends \core\task\scheduled_task {      
    public function get_name() {
        // Shown in admin screens
        return get_string('crondump', 'local_loginfo');
    }
                                                                     
    public function execute() {       
        
        $dateformat = get_config('local_loginfo', 'dateformat');
        $path = get_config('local_loginfo', 'dumppath').'/dump.csv';
        
        global $DB;
        $sql = "SELECT * FROM mdl_local_loginfo ORDER BY id";
        $result = $DB->get_records_sql($sql);
        
        $defaultpath = "__DIR__ . '/../../dump.csv'";
        
        if (empty($path)){
            $path = $defaultpath;
        }

        $fp = fopen($path, 'a+');

        foreach ($result as $fields) {
            $timestamp = $fields->time;
            $date = date($dateformat, $timestamp);
            $fields->time = $date;
            fputcsv($fp,get_object_vars($fields));
            
        }

        fclose($fp);
    }
}