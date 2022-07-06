<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo "hello World $this->nama";
    }
    public function coba($nama = '', $umur = 0)
    {
        echo "Nama Saya $nama, saya berumur $umur";
    }
   
  
}
