<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjualanModel;
use CodeIgniter\HTTP\ResponseInterface;

class PenjualanController extends BaseController
{
    public function index()
    {
        // initialize model
        $penjualanModel = new PenjualanModel();

        // pager initialize 
        // $pager = \Config\Services::pager();

        $data = array(
            'dt_penjualan' => $penjualanModel->paginate(2, 'penjualan'),
            // 'pager' => $penjualanModel->pager,
            'title' => 'Laporan Penjualan',
        );

        return view('V_penjualan', $data);
    }
}
