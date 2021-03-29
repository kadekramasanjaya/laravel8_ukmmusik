<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PeminjamanModel extends Model
{
  public function allData()
  {
    return DB::table('tbl_peminjaman')->get();
  }
  public function detailData($id_barang)
  {
    return DB::table('tbl_peminjaman')->where('id_barang', $id_barang)->first();
  }
  public function addData($data)
  {
    DB::table('tbl_peminjaman')->insert($data);
  }
  public function deleteData($id_barang)
  {
    DB::table('tbl_peminjaman')
      ->where('id_barang', $id_barang)
      ->delete();
  }
}
