<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfGenerator extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('mpdf_lib');
    }

    public function generate_pdf() {
        // Load view file into a variable
        $html = $this->load->view('pdf_template', '', true);

        // Create new mPDF object through the library wrapper
        $mpdf = $this->mpdf_lib->load();

        // Write PDF content
        $mpdf->WriteHTML($html);

        // Output the generated PDF (inline/download)
        $mpdf->Output('filename.pdf', 'I'); // I = inline, D = download
    }
}

