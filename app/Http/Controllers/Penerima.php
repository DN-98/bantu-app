<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Penerima extends Controller
{
    public function index(){
        echo view('penerima');
    }
}