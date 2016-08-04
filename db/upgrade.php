<?php


defined('MOODLE_INTERNAL') || die();

function xmldb_local_loginfo_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();
    
    //var_dump(get_class_methods($dbman)); exit;
    if ($oldversion < 2016080305) {
        $table = new xmldb_table('local_loginfo');
        //$table->name('local_loginfo');
        //var_dump($table); exit;
        
        // If table exists, drop it:
        if ($dbman->table_exists($table)){
            $dbman->drop_table($table);
        }
        
        if (!$dbman->table_exists($table)) {
           $dbman->install_from_xmldb_file(dirname(__FILE__).'/install.xml'); // Fix path /var/www/moodle/htdocs/local/loginfo/db/ **** DONE!!!*****
       }
    }
    return true;
}