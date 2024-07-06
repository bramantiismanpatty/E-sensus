<?php

function xls_from_array($data, $filename = 'data.xlsx') {
    // Load PHPExcel library
    include APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php';

    $excel = new PHPExcel();
    $excel->setActiveSheetIndex(0);
    $sheet = $excel->getActiveSheet();

    // Fill header
    if (!empty($data)) {
        $col = 0;
        foreach ($data[0] as $key => $value) {
            $sheet->setCellValueByColumnAndRow($col, 1, $key);
            $col++;
        }

        // Fill data
        $row = 2;
        foreach ($data as $record) {
            $col = 0;
            foreach ($record as $value) {
                $sheet->setCellValueByColumnAndRow($col, $row, $value);
                $col++;
            }
            $row++;
        }
    }

    // Save the file to the output
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
    $writer->save('php://output');
    exit();
}
