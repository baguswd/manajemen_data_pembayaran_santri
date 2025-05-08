<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    // Tampilkan semua data santri
    public function index()
    {
        $santris = Santri::all();
        return view('santri.index', compact('santris'));
    }

    // Tampilkan form untuk tambah data santri
    public function create()
    {
        return view('santri.create');
    }

    // Simpan data santri baru (simulasi)
    public function store(Request $request)
    {
        // Karena ini dummy, kita tidak benar-benar menyimpan data
        // Biasanya validasi dan simpan ke DB di sini
        return redirect()->route('santri.index')->with('success', 'Data santri berhasil ditambahkan (simulasi).');
    }

    // Tampilkan detail satu santri
    public function show($id)
    {
        $santri = Santri::find($id);
        if (!$santri) {
            abort(404);
        }

        return view('santri.show', compact('santri'));
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $santri = Santri::find($id);
        if (!$santri) {
            abort(404);
        }

        return view('santri.edit', compact('santri'));
    }

    // Update data santri (simulasi)
    public function update(Request $request, $id)
    {
        // Simulasi update
        return redirect()->route('santri.index')->with('success', 'Data santri berhasil diupdate (simulasi).');
    }

    // Hapus data santri (simulasi)
    public function destroy($id)
    {
        // Simulasi delete
        return redirect()->route('santri.index')->with('success', 'Data santri berhasil dihapus (simulasi).');
    }
}
