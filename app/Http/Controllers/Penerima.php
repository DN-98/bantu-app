<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CrudModels;

class Penerima extends Controller
{
    public function index(){
        $model = new CrudModels();
        $penerima = $model->getDataPenerima();
        echo view('penerima', ['penerima' => $penerima]);
    }
}