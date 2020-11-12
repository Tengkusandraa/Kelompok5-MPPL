<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function generalform()
    {
        return view('admin.generalform');
    }
    public function kartustock()
    {
        return view('admin.kartustock');
    }
    public function persediaanobat()
    {
        return view('admin.persediaanobat');
    }
    public function dataadmin()
    {
        return view('admin.dataadmin');
    }
    public function ubahprofil()
    {
        return view('admin.ubahprofil');
    }
    public function riwayat()
    {
        return view('admin.riwayat');
    }

}
