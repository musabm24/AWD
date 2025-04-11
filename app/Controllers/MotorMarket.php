<?php
// filepath: /c:/Users/Family/AppData/Roaming/Code/User/globalStorage/humy2833.ftp-simple/remote-workspace-temp/3843a7f31e81087dcc7e0324bfcb661f/home/stud/0/2378632/public_html/project-root2/app/Controllers/MotorMarket.php


namespace App\Controllers;

use App\Models\MotorMarketModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MotorMarket extends BaseController
{
    public function index()
    {
        $model = new MotorMarketModel();
        $data = [
            'title' => 'Motor Market',
            'cars' => $model->getCars()
        ]; 

        return view('home/index', $data)
            . view('templates/nav3', $data)
            . view('templates/header', $data)
            . view('templates/footer', $data);
    }
}