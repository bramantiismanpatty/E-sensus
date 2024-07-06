<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Mpdf\Mpdf;

class Mpdf_lib {

    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
        $this->ci->load->library('mpdf');
    }

    public function load() {
        return new \Mpdf\Mpdf();
    }

}
