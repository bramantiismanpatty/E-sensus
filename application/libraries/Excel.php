<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel {
    public function __construct() {
        // Include PHPExcel library
        require_once APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php';
    }
}
