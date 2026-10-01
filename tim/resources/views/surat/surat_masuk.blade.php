<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Surat Masuk — E-Arsip Surat LPM UDW</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: #FDFBF7;">

@if (session('success'))
<div id="toast-sukses" class="fixed top-6 right-6 z-50 flex items-center gap-3 bg-white border border-neutral-200 shadow-lg rounded-2xl px-5 py-4 max-w-sm">
    <div class="w-9 h-9 rounded-full bg-green-50 flex items-center justify-center flex-none">
        <svg class="w-5 h-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
    </div>
    <div class="flex-1">
        <p class="text-sm font-semibold text-neutral-900">{{ session('success') }}</p>
    </div>
    <button type="button" onclick="document.getElementById('toast-sukses').remove()" class="text-neutral-400 hover:text-neutral-600 flex-none">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
</div>
@endif

<aside class="sidebar">
  <div class="brand">
    <img class="brand-logo" src="{{ asset('img/logo.png') }}" alt="LPM">
    <div>
      <div class="brand-name">LPM · E-Arsip Surat</div>
      <div class="brand-sub">Universitas Dharma Wacana Metro</div>
    </div>
  </div>

  <div class="nav-label">MENU UTAMA</div>
  <a href="{{ route('dashboard.admin') }}" class="nav-item">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
      <span>Dashboard</span>
    </div>
  </a>
  <a href="{{ url('/surat-masuk') }}" class="nav-item active">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
      <span>Surat Masuk</span>
    </div>
    <span class="count">124</span>
  </a>
  <a href="{{ url('/surat-keluar') }}" class="nav-item">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
      <span>Surat Keluar</span>
    </div>
    <span class="count">45</span>
  </a>
  <a href="{{ url('/surat-tugas') }}" class="nav-item">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
      <span>Surat Tugas</span>
    </div>
    <span class="count">18</span>
  </a>
  <div class="nav-item">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
      <span>Laporan Surat</span>
    </div>
  </div>

  <div class="nav-label">LAINNYA</div>
  <div class="nav-item">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06-.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
      <span>Pengaturan</span>
    </div>
  </div>

  <div class="sidebar-spacer"></div>

  <form class="logout-form" method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="nav-item logout" style="border:none; background:none; width:100%; cursor:pointer;">
      <div class="left">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="M16 17l5-5-5-5"/><path d="M21 12H9"/></svg>
        <span>Keluar</span>
      </div>
    </button>
  </form>
</aside>

<div class="main">
  <div class="topbar">
    <div class="search">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <span>Cari nomor surat, perihal...</span>
    </div>
    <div class="topbar-spacer"></div>
    <div style="display: flex; align-items: center; gap: 12px;">
      <div style="width: 36px; height: 36px; border-radius: 50%; border: 1px solid #e5e5e5; display: flex; align-items: center; justify-content: center; cursor: pointer; background: #fff;">
        <svg style="width: 18px; height: 18px; color: #555;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
      </div>
      <div style="width: 36px; height: 36px; border-radius: 50%; border: 1px solid #e5e5e5; display: flex; align-items: center; justify-content: center; cursor: pointer; background: #fff;">
        <svg style="width: 18px; height: 18px; color: #555;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06-.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
      </div>
      <div class="profile" style="margin-left: 4px;">
        <div class="avatar">AD</div>
        <div class="profile-name">Admin LPM</div>
      </div>
    </div>
  </div>

  <div class="content" style="padding: 40px;">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold tracking-tight text-neutral-900">Surat Masuk</h1>
            <p class="text-neutral-500 mt-1">Catat surat yang diterima dan lihat rekap arsipnya</p>
        </div>

        <div class="bg-neutral-200/60 p-1.5 rounded-2xl inline-flex gap-1 mb-8 shadow-inner">
            <button onclick="switchTab('formulir')" id="btn-formulir" class="px-6 py-2.5 rounded-xl font-medium text-sm transition-all duration-200 text-neutral-600 hover:text-neutral-900">Formulir</button>
            <button onclick="switchTab('rekap')" id="btn-rekap" class="px-6 py-2.5 rounded-xl font-medium text-sm transition-all duration-200 bg-white text-neutral-900 shadow-sm">Rekap Surat</button>
        </div>

        <div id="tab-formulir" class="hidden bg-white border border-neutral-200/80 rounded-3xl p-8 md:p-10 shadow-sm max-w-3xl mx-auto">
            <div class="mb-8 pb-6 border-b border-neutral-100">
                <div class="flex items-center gap-4 mb-2">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo LPM" class="w-14 h-14 object-contain">
                    <h2 class="text-2xl font-bold text-neutral-900">Tambah Surat Masuk</h2>
                </div>
                <p class="text-sm text-neutral-500 pl-[72px]">Lengkapi data arsip surat masuk dengan benar di bawah ini</p>
            </div>

            <form action="{{ route('surat-masuk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Nomor Surat</label>
                        <input type="text" name="nomor" id="nomor" required placeholder="Contoh: 005/SM/IX/2026" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Tanggal Terima</label>
                        <input type="date" name="tanggal" id="tanggal" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Perihal</label>
                    <input type="text" name="perihal" id="perihal" required placeholder="Contoh: Undangan Rapat" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Dari (Asal Surat)</label>
                    <input type="text" name="sumber" id="sumber" required placeholder="Contoh: Dinas Pendidikan" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="3" placeholder="Catatan tambahan (opsional)" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Unggah Berkas/File</label>
                    <input type="file" name="berkas" id="berkas" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 cursor-pointer">
                </div>
                <div class="pt-3">
                    <button type="submit" class="w-full py-3.5 bg-neutral-900 text-white font-semibold rounded-xl hover:bg-neutral-800 transition text-sm shadow-sm">Simpan Surat Masuk</button>
                </div>
            </form>
        </div>

        <div id="tab-rekap" class="bg-white border border-neutral-200/80 rounded-3xl p-6 md:p-8 shadow-sm max-w-3xl mx-auto mt-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                <h2 class="text-xl font-bold text-neutral-800">Rekap Surat Masuk</h2>
                <input type="text" id="cariInput" placeholder="Cari di rekap..." class="w-full md:w-72 px-4 py-2.5 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 text-sm">
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-neutral-200 text-neutral-400 text-xs font-semibold uppercase">
                            <th class="pb-3 px-3">Nomor Surat</th>
                            <th class="pb-3 px-3">Perihal</th>
                            <th class="pb-3 px-3">Dari</th>
                            <th class="pb-3 px-3">Keterangan</th>
                            <th class="pb-3 px-3">Tanggal</th>
                            <th class="pb-3 px-3">Berkas</th>
                            <th class="pb-3 px-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tabelBody" class="text-sm divide-y divide-neutral-100">
                        @forelse($suratMasuks as $item)
                        <tr class="border-b hover:bg-neutral-50/50 transition">
                            <td class="py-4 px-3 font-medium text-neutral-900">{{ $item->nomor }}</td>
                            <td class="py-4 px-3 text-neutral-700">{{ $item->perihal }}</td>
                            <td class="py-4 px-3 text-neutral-700">{{ $item->sumber }}</td>
                            <td class="py-4 px-3 text-neutral-600 text-xs">{{ $item->keterangan ?: '-' }}</td>
                            <td class="py-4 px-3 text-neutral-600">{{ $item->tanggal }}</td>
                            <td class="py-4 px-3 text-amber-600 text-xs font-medium">
                                @if($item->berkas)
                                    <a href="{{ asset('storage/' . $item->berkas) }}" target="_blank" class="hover:underline">Lihat Berkas</a>
                                @else
                                    Tidak ada
                                @endif
                            </td>
                            <td class="py-4 px-3 text-center">
                                <div class="inline-flex items-center gap-1.5">
                                    <a href="{{ route('surat-masuk.cetak', $item->id) }}" title="Unduh PDF" class="inline-flex items-center justify-center bg-blue-50 hover:bg-blue-100 p-1.5 rounded-lg transition">
                                        <img src="{{ asset('img/unduh.svg') }}" alt="Unduh PDF" class="w-4 h-4">
                                    </a>
                                    <a href="{{ route('surat-masuk.edit', $item->id) }}" class="text-amber-700 bg-amber-50 hover:bg-amber-100 px-2.5 py-1 rounded-lg text-xs font-semibold transition">Edit</a>
                                    <form action="{{ route('surat-masuk.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 bg-red-50 hover:bg-red-100 px-2.5 py-1 rounded-lg text-xs font-semibold transition">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-neutral-400 text-sm">Belum ada surat. Silakan isi lewat tab Formulir.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
    function switchTab(target) {
        const tabFormulir = document.getElementById('tab-formulir');
        const tabRekap = document.getElementById('tab-rekap');
        const btnFormulir = document.getElementById('btn-formulir');
        const btnRekap = document.getElementById('btn-rekap');

        if (target === 'formulir') {
            tabFormulir.classList.remove('hidden');
            tabRekap.classList.add('hidden');
            btnFormulir.className = "px-6 py-2.5 rounded-xl font-medium text-sm transition-all duration-200 bg-white text-neutral-900 shadow-sm";
            btnRekap.className = "px-6 py-2.5 rounded-xl font-medium text-sm transition-all duration-200 text-neutral-600 hover:text-neutral-900";
        } else {
            tabFormulir.classList.add('hidden');
            tabRekap.classList.remove('hidden');
            btnRekap.className = "px-6 py-2.5 rounded-xl font-medium text-sm transition-all duration-200 bg-white text-neutral-900 shadow-sm";
            btnFormulir.className = "px-6 py-2.5 rounded-xl font-medium text-sm transition-all duration-200 text-neutral-600 hover:text-neutral-900";
        }
    }

    function cariData() {
        let keyword = document.getElementById('cariInput').value.toLowerCase();
        let rows = document.querySelectorAll('#tabelBody tr');

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            if (text.includes(keyword)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    document.getElementById('cariInput').addEventListener('keyup', cariData);

    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('tab') === 'rekap') {
            switchTab('rekap');
        }
    });

    setTimeout(function () {
        const toast = document.getElementById('toast-sukses');
        if (toast) {
            toast.style.transition = 'opacity 0.4s';
            toast.style.opacity = '0';
            setTimeout(() => toast.remove(), 400);
        }
    }, 3000);
</script>
</body>
</html>