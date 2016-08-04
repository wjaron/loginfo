<?php

namespace local_loginfo\task;

class crondump extends \core\task\scheduled_task {      
    public function get_name() {
        // Shown in admin screens
        return get_string('crondump', 'local_loginfo');
    }
                                                                     
    public function execute() {       
        
        global $DB;
        $sql = "SELECT * FROM mdl_local_loginfo ORDER BY id";
        $result = $DB->get_records_sql($sql);
        $fp = fopen('/../../dump.csv', 'w');

        foreach ($result as $fields) {
            fputcsv($fp,get_object_vars($fields));
        }

        fclose($fp);
    }                                                                                                                               
} 