<?php

namespace App\Controllers;


use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\CommonModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataExport;



class Home extends BaseController
{
    public function index(): string
    {
        $model = new CommonModel();
        $result =  $model->selectQuery();
        $data['tableData'] = $result;
        return view('welcome_message', $data);
    }
     public function downlord()
     {
        $model = new CommonModel();
        $spreadsheet = new Excel();
        

        $filename = 'downloaded_data.xlsx';

       

        

          
     }
    
}
