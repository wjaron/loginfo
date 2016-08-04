<?php


class local_loginfo_renderer extends plugin_renderer_base {
    
    public function display() {
        
        $out = '';
        $out .= $this->header();
        
        $out .= 'Tu bedzie tabelka z wynikami zalogowanych uzytkownikow';
        
        $out .= $this->footer();
        return $out;
    }
    
    
    
    
    
    
    
    ///////////////////////////////////////////////////////
    public function displaylogged() {
        global $OUTPUT;
        global $DB;
        
        $out = '';
        $out .= $OUTPUT->header();
        
        $sql = 'SELECT userid FROM mdl_user_lastaccess WHERE timeaccess IS NOT NULL';
        $sqll = "SELECT username FROM mdl_user WHERE id=$userid";
        $result = $DB->get_records_sql($sql);

        
        
        $out .= html_writer::table($table);
        
        $out .= $OUTPUT->footer();
        return $out;
    }
}