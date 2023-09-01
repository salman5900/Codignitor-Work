<?php

namespace App\Controllers;

require ROOTPATH . 'vendor/autoload.php';

use App\Models\CommonModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new CommonModel();
        $result =  $model->selectQuery();
        $data['tableData'] = $result;
        return view('welcome_message', $data);
    }

    public function download()
    {
        $model = new CommonModel();
        $result = $model->selectQuery();

        // Create a new Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Get the active worksheet
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue("A1", "firstname");
        $sheet->setCellValue("B1", "lastname");
        $sheet->setCellValue("C1", "address");
        $sheet->setCellValue("D1", "phonenumber");
        
        $count = 2;

        // Populate data from your database
        foreach ($result as $row) {
            $sheet->setCellValue("A" . $count, $row->firstname);
            $sheet->setCellValue("B" . $count, $row->lastname);
            $sheet->setCellValue("C" . $count, $row->address);
            $sheet->setCellValue("D" . $count, $row->phonenumber);
            $count++;
        }

        // Create a writer for XLSX
        $writer = new Xlsx($spreadsheet);

        // Set the headers for the download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="your_file.xlsx"');
        header('Cache-Control: max-age=0');

        // Write the spreadsheet to the response
        $writer->save('php://output');
    }
}
