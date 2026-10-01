<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Edit Surat Keluar — E-Arsip Surat LPM UDW</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: #FDFBF7;">

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
  <a href="{{ url('/surat-masuk') }}" class="nav-item">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
      <span>Surat Masuk</span>
    </div>
    <span class="count">124</span>
  </a>
  <a href="{{ url('/surat-keluar') }}" class="nav-item active">
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
      <div class="profile" style="margin-left: 4px;">
        <div class="avatar">AD</div>
        <div class="profile-name">Admin LPM</div>
      </div>
    </div>
  </div>

  <div class="content" style="padding: 40px;">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold tracking-tight text-neutral-900">Edit Surat Keluar</h1>
            <p class="text-neutral-500 mt-1">Ubah data arsip surat keluar</p>
        </div>

        @if ($errors->any())
        <div class="mb-6 px-4 py-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm max-w-3xl mx-auto">
            <p class="font-semibold mb-1">Perubahan belum tersimpan. Periksa isian berikut:</p>
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="bg-white border border-neutral-200/80 rounded-3xl p-8 md:p-10 shadow-sm max-w-3xl mx-auto">
            <div class="mb-8 pb-6 border-b border-neutral-100">
                <div class="flex items-center gap-4 mb-2">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo LPM" class="w-14 h-14 object-contain">
                    <h2 class="text-2xl font-bold text-neutral-900">Edit Surat Keluar</h2>
                </div>
                <p class="text-sm text-neutral-500 pl-[72px]">Nomor surat: {{ $surat->nomor }}</p>
            </div>

            <form action="{{ route('surat-keluar.update', $surat->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Nomor Surat</label>
                        <input type="text" name="nomor" value="{{ old('nomor', $surat->nomor) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Tanggal Keluar</label>
                        <input type="date" name="tanggal" value="{{ old('tanggal', \Carbon\Carbon::parse($surat->tanggal)->format('Y-m-d')) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Perihal</label>
                    <input type="text" name="perihal" value="{{ old('perihal', $surat->perihal) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Tujuan Surat</label>
                    <input type="text" name="tujuan" value="{{ old('tujuan', $surat->tujuan) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Keterangan</label>
                    <textarea name="keterangan" rows="3" placeholder="Catatan tambahan (opsional)" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">{{ old('keterangan', $surat->keterangan) }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Berkas/File</label>
                    @if ($surat->berkas)
                        <p class="text-sm text-neutral-600 mb-2">
                            Berkas saat ini:
                            <a href="{{ asset('storage/' . $surat->berkas) }}" target="_blank" class="text-amber-600 font-medium hover:underline">Lihat Berkas</a>
                        </p>
                    @else
                        <p class="text-sm text-neutral-400 mb-2">Belum ada berkas.</p>
                    @endif
                    <input type="file" name="berkas" accept=".pdf,.jpg,.jpeg,.png" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 cursor-pointer">
                    <p class="text-xs text-neutral-400 mt-1">Kosongkan jika tidak ingin mengganti berkas. PDF, JPG, atau PNG, maksimal 2 MB.</p>
                </div>
                <div class="pt-3 flex flex-col sm:flex-row gap-3">
                    <button type="submit" class="flex-1 py-3.5 bg-neutral-900 text-white font-semibold rounded-xl hover:bg-neutral-800 transition text-sm shadow-sm">Simpan Perubahan</button>
                    <a href="{{ route('surat-keluar.index', ['tab' => 'rekap']) }}" class="flex-1 py-3.5 text-center bg-neutral-100 text-neutral-700 font-semibold rounded-xl hover:bg-neutral-200 transition text-sm">Batal</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

</body>
</html>