<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Halaman extends BaseController
{
    public function index()
    {
        echo 'Halaman Dashboard';
    }
}
