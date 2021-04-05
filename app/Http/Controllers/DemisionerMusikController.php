<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemisionerModel;

class DemisionerMusikController extends Controller
{

    public function __construct()
    {
        $this->DemisionerModel = new DemisionerModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'demisionerukmmusikundiksha' => $this->DemisionerModel->allData(),
        ];
        return view('demisionerukmmusikundiksha', $data);
    }
    public function detail($id_demisioner)
    {
        if (!$this->DemisionerModel->detailData($id_demisioner)) {
            abort(404);
        }
        $data = [
            'demisionerukmmusikundiksha' => $this->DemisionerModel->detailData($id_demisioner),
        ];
        return view('detaildemisioner', $data);
    }
    public function adddemisioner()
    {
        return view('adddemisioner');
    }
    public function insertdemisioner()
    {
        Request()->validate([
            'nama' => 'required',
            'nim' => 'required|unique:tbl_demisioner,nim|min:3|max:100',
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
        $file->move(public_path('foto_demisioner'), $fileName);

        $data = [
            'nama' => Request()->nama,
            'nim' => Request()->nim,
            'prodi' => Request()->prodi,
            'jabatan' => Request()->jabatan,
            'status' => Request()->status,
            'foto' => $fileName,
        ];

        $this->DemisionerModel->addData($data);
        return redirect()->route('demisionerukmmusikundiksha')->with('pesan', 'DATA BERHASIL DITAMBAHKAN!!!');
    }

    public function editdemisioner($id_demisioner)
    {
        if (!$this->DemisionerModel->detailData($id_demisioner)) {
            abort(404);
        }
        $data = [
            'demisionerukmmusikundiksha' => $this->DemisionerModel->detailData($id_demisioner),
        ];
        return view('editdemisioner', $data);
    }

    public function updatedemisioner($id_demisioner)
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
            $file->move(public_path('foto_demisioner'), $fileName);

            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
                'foto' => $fileName,
            ];

            $this->DemisionerModel->editData($id_demisioner, $data);
        } else {
            // jika tidak ingin ganti foto
            $data = [
                'nama' => Request()->nama,
                'nim' => Request()->nim,
                'prodi' => Request()->prodi,
                'jabatan' => Request()->jabatan,
                'status' => Request()->status,
            ];

            $this->DemisionerModel->editData($id_demisioner, $data);
        }

        return redirect()->route('demisionerukmmusikundiksha')->with('pesan', 'DATA BERHASIL UPDATE!!!');
    }

    public function deletedemisioner($id_demisioner)
    {
        // hapus foto 
        $demisionerukmmusikundiksha = $this->DemisionerModel->detailData($id_demisioner);
        if ($demisionerukmmusikundiksha->foto <> "") {
            unlink(public_path('foto_demisioner') . '/' . $demisionerukmmusikundiksha->foto);
        }
        $this->DemisionerModel->deleteData($id_demisioner);
        return redirect()->route('demisionerukmmusikundiksha')->with('pesan', 'DATA BERHASIL HAPUS!!!');
    }
}
