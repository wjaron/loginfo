<?php

namespace local_loginfo;
defined('MOODLE_INTERNAL') || die();

class admin_setting_configtext_validate extends \admin_setting_configtext {
    public function validate($path) {
        $string = '/var/www/moodle/data';
        $errormsg = 'Wrong path, please correct';
        $a = parent::validate($path);
        if($a === true) {
            if (!file_exists($path.'/dump.csv') && !is_dir($path)) {
                return $errormsg.'. No such file or directory.';
            }
            if (!is_writable($path)) {
                return $errormsg.'. You have no permissions.';
            }
            if ($path == ($string)) {
                return true;
                } else {
                    return $errormsg;
                        }
                } else {
            return $a;
        }
    }
}