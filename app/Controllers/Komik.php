<?php

namespace App\Controllers;
use  \App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel; // memanggil model komik
    public function __construct() //menggunakan oop pada php
    {
        $this->komikModel = new KomikModel(); // inisialisasi model "Komik Model"
    }
    public function index()
    {
        $komik = $this->komikModel -> findAll(); // memanggil semua data dari database ci5
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

       // $komikModel = new \App\Models\KomikModel(); // Versi Pertama
        
        return view ('komik/index', $data); 
    }
}
