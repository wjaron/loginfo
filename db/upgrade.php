<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_local_loginfo_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();
    
    if ($oldversion < 2016080307) {
        $table = new xmldb_table('local_loginfo');
    
        if ($dbman->table_exists($table)){
            $dbman->drop_table($table);
        }
        
        if (!$dbman->table_exists($table)) {
           $dbman->install_from_xmldb_file(dirname(__FILE__).'/install.xml');
       }
    }
    return true;
}