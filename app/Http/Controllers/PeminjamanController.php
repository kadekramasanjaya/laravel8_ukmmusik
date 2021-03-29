<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamanModel;

class PeminjamanController extends Controller
{

  public function __construct()
  {
    $this->PeminjamanModel = new PeminjamanModel();
  }

  public function index()
  {
    $data = [
      'peminjaman' => $this->PeminjamanModel->allData(),
    ];
    return view('peminjaman', $data);
  }
  public function detail($id_barang)
  {
    if (!$this->PeminjamanModel->detailData($id_barang)) {
      abort(404);
    }
    $data = [
      'peminjaman' => $this->PeminjamanModel->detailData($id_barang),
    ];
    return view('detailpeminjaman', $data);
  }
  public function addpeminjaman()
  {
    return view('addpeminjaman');
  }
  public function insertpeminjaman()
  {
    Request()->validate([
      'nama_barang' => 'required',
      'nama_peminjam' => 'required',
      'tanggal' => 'required',
      'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
    ]);

    // jika validasi tidak ada maka lakukan simpan data
    // upload gambar/foto
    $file = Request()->foto;
    $fileName = Request()->nama_barang . '.' . $file->extension();
    $file->move(public_path('foto_peminjaman'), $fileName);

    $data = [
      'nama_barang' => Request()->nama_barang,
      'nama_peminjam' => Request()->nama_peminjam,
      'tanggal' => Request()->tanggal,
      'foto' => $fileName,
    ];

    $this->PeminjamanModel->addData($data);
    return redirect()->route('peminjaman')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
  }

  public function editpeminjaman($id_barang)
  {
    if (!$this->PeminjamanModel->detailData($id_barang)) {
      abort(404);
    }
    $data = [
      'peminjaman' => $this->PeminjamanModel->detailData($id_barang),
    ];
    return view('editpeminjaman', $data);
  }

  public function deletepeminjaman($id_barang)
  {
    // hapus foto 
    $peminjaman = $this->PeminjamanModel->detailData($id_barang);
    if ($peminjaman->foto_peminjaman <> "") {
      unlink(public_path('foto_peminjaman') . '/' . $peminjaman->foto_peminjaman);
    }
    $this->PeminjamanModel->deleteData($id_barang);
    return redirect()->route('peminjaman')->with('pesan', 'DATA BERHASIL HAPUS!!!');
  }
}
