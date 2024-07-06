<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_lib {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        require_once APPPATH . 'libraries/dompdf/autoload.inc.php'; // Adjust path as necessary
        require_once APPPATH . 'libraries/html5-php-master/vendor/autoload.php'; // Adjust path as necessary
    }

    public function generate($html, $filename = '', $paper = 'A4', $orientation = 'portrait') {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper($paper, $orientation);

        // Render the HTML as PDF
        $dompdf->render();

        // Output to browser
        if ($filename !== '') {
            $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
        } else {
            $dompdf->stream();
        }
    }
}
