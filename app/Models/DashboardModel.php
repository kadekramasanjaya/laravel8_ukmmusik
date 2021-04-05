<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
  public function allDataMahasiswa()
  {
    return DB::table('tbl_mahasiswa')->get();
  }
}
