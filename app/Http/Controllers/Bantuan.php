<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Bantuan extends Controller
{
    public function index(){
        echo view('bantuan');
    }
}