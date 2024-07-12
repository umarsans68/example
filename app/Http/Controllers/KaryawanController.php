<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return view('karyawan.index',compact(['karyawan']));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        Karyawan::create($request->except(['_token','submit']));
        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit',compact(['karyawan']));
    }

    public function update($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->update($request->except(['_token','submit']));
        return redirect('/karyawan');
    }

    public function destory($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}
