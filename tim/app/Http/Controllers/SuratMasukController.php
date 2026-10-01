<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class SuratMasukController extends Controller
{
    // Menampilkan halaman surat masuk + data rekap
   public function index()
    {
        $suratMasuks = SuratMasuk::latest()->get();
        return view('surat.surat_masuk', compact('suratMasuks'));
    }

    // Menyimpan data surat masuk baru
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'sumber' => 'required',
            'keterangan' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('berkas')) {
            $path = $request->file('berkas')->store('berkas_surat', 'public');
        }

        SuratMasuk::create([
            'nomor' => $request->nomor,
            'tanggal' => $request->tanggal,
            'perihal' => $request->perihal,
            'sumber' => $request->sumber,
            'keterangan' => $request->keterangan,
            'berkas' => $path
        ]);

        // Otomatis mengarah ke tab rekap setelah data disimpan
        return redirect()->route('surat-masuk.index', ['tab' => 'rekap'])->with('success', 'Surat masuk berhasil disimpan!');
    }

    // Menampilkan halaman form edit berdasarkan ID surat
    public function edit($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $suratMasuks = SuratMasuk::latest()->get();
        return view('surat.surat_masuk_edit', compact('surat', 'suratMasuks'));
    }

    // Menyimpan perubahan data surat yang sudah diedit
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'sumber' => 'required',
            'keterangan' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $surat = SuratMasuk::findOrFail($id);

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
            'sumber' => $request->sumber,
            'keterangan' => $request->keterangan,
            'berkas' => $path
        ]);

        // Otomatis mengarah ke tab rekap setelah data diperbarui
        return redirect()->route('surat-masuk.index', ['tab' => 'rekap'])->with('success', 'Surat masuk berhasil diperbarui!');
    }

    // Menghapus surat masuk
    public function destroy($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        if ($surat->berkas) {
            Storage::disk('public')->delete($surat->berkas);
        }
        $surat->delete();

        return redirect()->route('surat-masuk.index', ['tab' => 'rekap'])->with('success', 'Surat masuk berhasil dihapus!');
    }

    // Mengunduh lembar arsip surat masuk dalam bentuk PDF
    public function cetak($id)
    {
        $surat = SuratMasuk::findOrFail($id);

        $pdf = Pdf::loadView('surat.cetak_pdf', [
            'judul'        => 'Lembar Arsip Surat Masuk',
            'labelTanggal' => 'Tanggal Terima',
            'labelPihak'   => 'Asal Surat',
            'pihak'        => $surat->sumber,
            'surat'        => $surat,
        ])->setPaper('a4', 'portrait');

        return $pdf->download('surat-masuk-' . Str::slug($surat->nomor) . '.pdf');
    }
}