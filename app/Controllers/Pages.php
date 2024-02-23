<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('V_dashboard', $data);
    }
    public function penjualan()
    {
        $data = [
            'title' => 'Laporan Penjualan'
        ];

        return view('V_penjualan', $data);
    }
    public function keseluruhan()
    {
        $data = [
            'title' => 'Laporan Keseluruhan'
        ];

        return view('V_keseluruhan', $data);
    }
    public function data_produk()
    {

        $produkModel = new ProdukModel();

        $data = [
            'title' => 'Data Produk',
            'produk' => $produkModel->orderBy('ProdukID', 'DESC')->findAll(),
        ];

        return view('V_data_produk', $data);
    }
    public function pengguna()
    {
        $data = [
            'title' => 'Data Pengguna'
        ];
        return view('V_pengguna', $data);
    }
    public function pengaturan()
    {
        $data = [
            'title' => 'Pengaturan Aplikasi'
        ];
        return view('V_pengaturan', $data);
    }
    public function pembelian()
    {
        $data = [
            'title' => 'Kasir'
        ];
        return view('V_kasir', $data);
    }
}
