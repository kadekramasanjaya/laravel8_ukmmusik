<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaMusikController extends Controller
{

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'mahasiswaukmmusikundiksha' => $this->MahasiswaModel->allData(),
        ];
        return view('mahasiswaukmmusikundiksha', $data);
    }
    public function detail($id_mahasiswa)
    {
        if (!$this->MahasiswaModel->detailData($id_mahasiswa)) {
            abort(404);
        }
        $data = [
            'mahasiswaukmmusikundiksha' => $this->MahasiswaModel->detailData($id_mahasiswa),
        ];
        return view('detailmahasiswa', $data);
    }
    public function addmahasiswa()
    {
        return view('addmahasiswa');
    }
    public function insertmahasiswa()
    {
        Request()->validate([
            'nama' => 'required',
            'nim' => 'required|unique:tbl_mahasiswa,nim|min:3|max:100',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nim.required' => 'nim wajib diisi !!',
            'nim.unique' => 'nim minimal 3 karakter !!',
        ]);

        // jika validasi tidak ada maka lakukan simpan data
        // upload gambar/foto
        $file = Request()->foto;
        $fileName = Request()->nama . '.' . $file->extension();
        $file->move(public_path('foto_mahasiswa'), $fileName);

        $data = [
            'nama' => Request()->nama,
            'nim' => Request()->nim,
            'prodi' => Request()->prodi,
            'jabatan' => Request()->jabatan,
            'status' => Request()->status,
            'foto' => $fileName,
        ];

        $this->MahasiswaModel->addData($data);
        return redirect()->route('mahasiswaukmmusikundiksha')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
    }

    public function editmahasiswa($id_mahasiswa)
    {
        if (!$this->MahasiswaModel->detailData($id_mahasiswa)) {
            abort(404);
        }
        $data = [
            'mahasiswaukmmusikundiksha' => $this->MahasiswaModel->detailData($id_mahasiswa),
        ];
        return view('editmahasiswa', $data);
    }

    public function updatemahasiswa($id_mahasiswa)
    {
        Request()->validate([
            'nama' => 'required',
            'nim' => 'required|min:3|max:100',
            'prodi' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nim.required' => 'nim wajib diisi !!',
        ]);

        // jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto <> "") {
            // jika ingin ganti foto
            // upload gambar/foto
            $file = Request()->foto;
            $fileName = Request()->nama . '.' . $file->extension();
            $file->move(public_path('foto_mahasiswa'), $fileName);

            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
                'foto' => $fileName,
            ];

            $this->MahasiswaModel->editData($id_mahasiswa, $data);
        } else {
            // jika tidak ingin ganti foto
            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
            ];

            $this->MahasiswaModel->editData($id_mahasiswa, $data);
        }

        return redirect()->route('mahasiswaukmmusikundiksha')->with('pesan', 'DATA BERHASIL UPDATE!!!');
    }
    public function deletemahasiswa($id_mahasiswa)
    {
        // hapus foto 
        $mahasiswaukmmusikundiksha = $this->MahasiswaModel->detailData($id_mahasiswa);
        if ($mahasiswaukmmusikundiksha->foto <> "") {
            unlink(public_path('foto_mahasiswa') . '/' . $mahasiswaukmmusikundiksha->foto);
        }
        $this->MahasiswaModel->deleteData($id_mahasiswa);
        return redirect()->route('mahasiswaukmmusikundiksha')->with('pesan', 'DATA BERHASIL HAPUS!!!');
    }
}
