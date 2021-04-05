<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardModel;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->DashboardModel = new DashboardModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'user' => $this->DashboardModel->allDataMahasiswa(),
        ];
        return view('user', $data);
    }
    public function print()
    {
        $data = [
            'user' => $this->DashboardModel->allDataMahasiswa(),
        ];
        return view('userprintpdf', $data);
    }
}
