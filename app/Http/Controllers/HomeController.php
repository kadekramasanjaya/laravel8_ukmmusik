<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardModel;

class HomeController extends Controller
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
            'dashboard' => $this->DashboardModel->allDataMahasiswa(),
        ];
        return view('dashboard', $data);
    }
    public function print()
    {
        $data = [
            'dashboard' => $this->DashboardModel->allDataMahasiswa(),
        ];
        return view('dashboardprintpdf', $data);
    }
}
