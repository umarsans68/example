<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage
use App\Models\Presensi;

class PresensiController extends Controller
{
    public function index()
    {
        $presensi = Presensi::all();
        return view('presensi.index', compact('presensi'));
    }

    public function create()
    {
        return view('presensi.create');
    }

    public function store(Request $request)
{
    // Validasi data dari request
    $request->validate([
        'nama' => 'required|string',
        'datel' => 'required|string',
        'jam_masuk' => 'required|string',
        'jam_pulang' => 'required|string',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk foto
    ]);

    // Proses upload foto
    $foto = $request->file('foto');
    $fotoName = time() . '_' . $foto->getClientOriginalName();
    $foto->storeAs('public/foto_presensi', $fotoName);

    // Tetapkan nilai default jika tidak ada nilai dalam request
    $request->merge([
        'jam_masuk' => $request->jam_masuk ?? '08:00',
        'jam_pulang' => $request->jam_pulang ?? '17:00',
        'foto' => 'storage/foto_presensi/' . $fotoName, // simpan nama foto ke dalam database dengan path yang benar
    ]);

    // Simpan data ke database
    Presensi::create($request->all());

    return redirect()->route('presensi.index')->with('success', 'Data presensi berhasil ditambahkan!');
}

    public function show($id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('presensi.show', compact('presensi'));
    }

    public function edit($id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('presensi.edit', compact('presensi'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data dari request
        $request->validate([
            'nama' => 'required|string',
            'datel' => 'required|string',
            'jam_masuk' => 'required|string',
            'jam_pulang' => 'required|string',
            'geolocation' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk foto (opsional)
        ]);

        // Update data ke database
        $presensi = Presensi::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            Storage::delete('public/foto_presensi/' . $presensi->foto);

            // Proses upload foto baru
            $fotoPath = $request->file('foto')->store('public/foto_presensi');
            $fotoName = basename($fotoPath);
            $request->merge(['foto' => $fotoName]);
        }

        $presensi->update($request->all());

        return redirect()->route('presensi.index')->with('success', 'Data presensi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Hapus data dari database
        $presensi = Presensi::findOrFail($id);

        // Hapus foto dari storage
        Storage::delete('public/foto_presensi/' . $presensi->foto);

        $presensi->delete();

        return redirect()->route('presensi.index')->with('success', 'Data presensi berhasil dihapus!');
    }
}
