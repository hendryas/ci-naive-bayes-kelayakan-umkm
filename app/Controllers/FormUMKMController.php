<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormUMKMController extends BaseController
{
    public function index()
    {
        return view('formulir/input_form');
    }
}
