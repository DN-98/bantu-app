<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CrudModels;

class Main extends Controller
{
    public function index(){
        $model = new CrudModels();
        $jumlah = $model->getTotalWarga();
        echo view('main', ['jumlah'=>$jumlah]);
    }
}