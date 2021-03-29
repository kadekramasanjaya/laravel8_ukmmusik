<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengembalianModel extends Model
{
  public function allData()
  {
    return DB::table('tbl_pengembalian')->get();
  }
  public function detailData($id_barang)
  {
    return DB::table('tbl_pengembalian')->where('id_barang', $id_barang)->first();
  }
  public function addData($data)
  {
    DB::table('tbl_pengembalian')->insert($data);
  }
  public function deleteData($id_barang)
  {
    DB::table('tbl_pengembalian')
      ->where('id_barang', $id_barang)
      ->delete();
  }
}
