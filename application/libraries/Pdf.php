<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'libraries/tcpdf/tcpdf.php';

class Pdf extends TCPDF {
    
    public function __construct() {
        parent::__construct();
    }
    
    // Add your own methods as needed
}
