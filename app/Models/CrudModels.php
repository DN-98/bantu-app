<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CrudModels extends Model
{
    use HasFactory;

    public function getDataPenerima(){
        $sql = "SELECT w.nama_warga, w.nokk_warga FROM pemberian_bantuan as pb, warga as w where pb.nik_warga = w.nik_warga ";
        $result = DB::select($sql);
        return $result;
    }

    public function getDataBantuan(){
        $sql = "SELECT b.nama_bantuan, count(pb.id_bantuan) FROM pemberian_bantuan as pb, bantuan as b where pb.id_bantuan = b.id_bantuan GROUP BY b.nama_bantuan";
        $result = DB::select($sql);
        return $result;
    }

}
