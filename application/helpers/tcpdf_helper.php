<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'libraries/tcpdf/tcpdf.php'; // Sesuaikan dengan path yang benar

class Pdf extends TCPDF {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk generate PDF dari HTML
    public function generate_pdf($html, $filename, $paper_size = 'A4', $orientation = 'portrait') {
        $pdf = new TCPDF($orientation, PDF_UNIT, $paper_size, true, 'UTF-8', false);

        // Set dokumen information
        $pdf->SetTitle($filename);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetFont('helvetica', '', 10);

        // Tambah halaman
        $pdf->AddPage();

        // Tambahkan HTML ke PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output PDF (I: tampilkan di browser, D: download, F: save to file, S: return as string)
        $pdf->Output($filename . '.pdf', 'I');
    }
}
