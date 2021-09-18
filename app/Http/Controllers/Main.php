<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CrudModels;

class Main extends Controller
{
    public function index(){
        echo view('main');
    }
}