<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluars = SuratKeluar::latest()->get();
        return view('surat.surat_keluar', compact('suratKeluars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('berkas')) {
            $path = $request->file('berkas')->store('berkas_surat', 'public');
        }

        SuratKeluar::create([
            'nomor' => $request->nomor,
            'tanggal' => $request->tanggal,
            'perihal' => $request->perihal,
            'tujuan' => $request->tujuan,
            'keterangan' => $request->keterangan,
            'berkas' => $path
        ]);

        return redirect()->route('surat-keluar.index', ['tab' => 'rekap'])->with('success', 'Surat keluar berhasil disimpan!');
    }

    public function edit($id)
    {
        $surat = SuratKeluar::findOrFail($id);
        $suratKeluars = SuratKeluar::latest()->get();
        return view('surat.surat_keluar_edit', compact('surat', 'suratKeluars'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $surat = SuratKeluar::findOrFail($id);

        $path = $surat->berkas;
        if ($request->hasFile('berkas')) {
            if ($surat->berkas) {
                Storage::disk('public')->delete($surat->berkas);
            }
            $path = $request->file('berkas')->store('berkas_surat', 'public');
        }

        $surat->update([
            'nomor' => $request->nomor,
            'tanggal' => $request->tanggal,
            'perihal' => $request->perihal,
            'tujuan' => $request->tujuan,
            'keterangan' => $request->keterangan,
            'berkas' => $path
        ]);

        return redirect()->route('surat-keluar.index', ['tab' => 'rekap'])->with('success', 'Surat keluar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $surat = SuratKeluar::findOrFail($id);
        if ($surat->berkas) {
            Storage::disk('public')->delete($surat->berkas);
        }
        $surat->delete();

        return redirect()->route('surat-keluar.index', ['tab' => 'rekap'])->with('success', 'Surat keluar berhasil dihapus!');
    }
}