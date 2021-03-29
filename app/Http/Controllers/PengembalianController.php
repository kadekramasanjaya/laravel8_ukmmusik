<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengembalianModel;

class PengembalianController extends Controller
{

  public function __construct()
  {
    $this->PengembalianModel = new PengembalianModel();
  }

  public function index()
  {
    $data = [
      'pengembalian' => $this->PengembalianModel->allData(),
    ];
    return view('pengembalian', $data);
  }
  public function detail($id_barang)
  {
    if (!$this->PengembalianModel->detailData($id_barang)) {
      abort(404);
    }
    $data = [
      'pengembalian' => $this->PengembalianModel->detailData($id_barang),
    ];
    return view('detailpengembalian', $data);
  }
  public function addpengembalian()
  {
    return view('addpengembalian');
  }
  public function insertpengembalian()
  {
    Request()->validate([
      'nama_barang' => 'required',
      'nama_pengembali' => 'required',
      'tanggal' => 'required',
      'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
    ]);

    // jika validasi tidak ada maka lakukan simpan data
    // upload gambar/foto
    $file = Request()->foto;
    $fileName = Request()->nama_barang . '.' . $file->extension();
    $file->move(public_path('foto_pengembalian'), $fileName);

    $data = [
      'nama_barang' => Request()->nama_barang,
      'nama_pengembali' => Request()->nama_pengembali,
      'tanggal' => Request()->tanggal,
      'foto' => $fileName,
    ];

    $this->PengembalianModel->addData($data);
    return redirect()->route('pengembalian')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
  }

  public function editpengembalian($id_barang)
  {
    if (!$this->PengembalianModel->detailData($id_barang)) {
      abort(404);
    }
    $data = [
      'pengembalian' => $this->PengembalianModel->detailData($id_barang),
    ];
    return view('editpengembalian', $data);
  }

  public function deletepengembalian($id_barang)
  {
    // hapus foto 
    $pengembalian = $this->PengembalianModel->detailData($id_barang);
    if ($pengembalian->foto <> "") {
      unlink(public_path('foto_pengembalian') . '/' . $pengembalian->foto);
    }
    $this->PengembalianModel->deleteData($id_barang);
    return redirect()->route('pengembalian')->with('pesan', 'DATA BERHASIL HAPUS!!!');
  }
}
