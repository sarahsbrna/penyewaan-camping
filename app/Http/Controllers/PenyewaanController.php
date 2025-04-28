<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewaan;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaans = Penyewaan::paginate(10);
        return view('penyewaan.index', compact('penyewaans'));
    }

    public function create()
    {
        return view('penyewaan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_penyewa' => 'required|string|max:255',
            'nama_alat' => 'required|string|max:255',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_sewa',
            'jumlah_unit' => 'required|integer|min:1',
            'harga_per_hari' => 'required|numeric|min:0',
            'status' => 'required|in:dipinjam,dikembalikan,terlambat',
        ]);

        Penyewaan::create($data);
        return redirect()->route('penyewaan.index')->with('success', 'Penyewaan berhasil ditambahkan.');
    }

    public function edit(Penyewaan $penyewaan)
    {
        return view('penyewaan.edit', compact('penyewaan'));
    }

    public function update(Request $request, Penyewaan $penyewaan)
    {
        $data = $request->validate([
            'nama_penyewa' => 'required|string|max:255',
            'nama_alat' => 'required|string|max:255',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_sewa',
            'jumlah_unit' => 'required|integer|min:1',
            'harga_per_hari' => 'required|numeric|min:0',
            'status' => 'required|in:dipinjam,dikembalikan,terlambat',
        ]);

        $penyewaan->update($data);
        return redirect()->route('penyewaan.index')->with('success', 'Penyewaan berhasil diperbarui.');
    }

    public function destroy(Penyewaan $penyewaan)
    {
        $penyewaan->delete();
        return redirect()->route('penyewaan.index')->with('success', 'Penyewaan berhasil dihapus.');
    }

    public function trash()
    {
        $penyewaans = Penyewaan::onlyTrashed()->paginate(10);
        return view('penyewaan.trash', compact('penyewaans'));
    }

    public function restore($id)
    {
        $penyewaan = Penyewaan::onlyTrashed()->findOrFail($id);
        $penyewaan->restore();
        return redirect()->route('penyewaan.index')->with('success', 'Penyewaan berhasil dipulihkan.');
    }
}
