<?php

namespace local_loginfo;
defined('MOODLE_INTERNAL') || die();

class admin_setting_configtext_validate extends \admin_setting_configtext {
    public function validate($path) {
        // allow paramtype to be a custom regex if it is the form of /pattern/
        $string = '/var/www/moodle/htdocs/local/loginfo';
        $a=parent::validate($path);
        if($a === true) {
            if (file_exists($path.'/dump.csv') && is_dir($path)) {
                if (is_writable($path)) {
                    if ($path == ($string))) {
                        return true;
                    } else {
                        return 'Wrong path, please correct';
                        }
                } else {
                    return 'Wrong path, please correct';
                }
            }
        } else {
            return $a;
        }
    }
}