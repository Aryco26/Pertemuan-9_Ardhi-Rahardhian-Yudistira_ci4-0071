<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['judul'] = "Halaman Index";
        $data['footer'] = "Ardhi Rahardhian Yudistira 23.240.0071";
        echo view('template/header', $data);
        echo view('index');
        echo view('template/footer', $data);
    }
}
