<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table  = 'komik'; // memanggil table komik dari database
    protected $useTimestamps = 'true'; // template ci
}