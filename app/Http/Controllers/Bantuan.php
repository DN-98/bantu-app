<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CrudModels;

class Bantuan extends Controller
{
    public function index(){
        $model = new CrudModels();
        $bantuan = $model->getDataBantuan();
        echo view('bantuan', ['bantuan' => $bantuan]);

    }
}