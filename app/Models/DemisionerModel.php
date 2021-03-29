<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DemisionerModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_demisioner')->get();
    }
    public function detailData($id_demisioner)
    {
        return DB::table('tbl_demisioner')->where('id_demisioner', $id_demisioner)->first();
    }
    public function addData($data)
    {
        DB::table('tbl_demisioner')->insert($data);
    }
    public function editdata($id_demisioner, $data)
    {
        DB::table('tbl_demisioner')
            ->where('id_demisioner', $id_demisioner)
            ->update($data);
    }
    public function deleteData($id_demisioner)
    {
        DB::table('tbl_demisioner')
            ->where('id_demisioner', $id_demisioner)
            ->delete();
    }
}
