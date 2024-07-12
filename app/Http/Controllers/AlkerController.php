<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alker;

class AlkerController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'merk' => 'required|string|max:255',
            'sn' => 'nullable|string|max:255',
            'kondisi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimum 2MB
            'status' => 'required|string|max:255',
        ]);

        // Menyimpan foto jika ada
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/foto', $fileName);
        } else {
            $fileName = null;
        }

        // Menyimpan data alker ke dalam database
        Alker::create([
            'merk' => $request->merk,
            'sn' => $request->sn,
            'kondisi' => $request->kondisi,
            'foto' => $fileName,
            'status' => $request->status,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('alker.index')->with('success', 'Data Alker berhasil ditambahkan.');
    }
}