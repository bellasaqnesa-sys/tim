<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Edit Surat Masuk — E-Arsip Surat LPM UDW</title>
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
  <a href="{{ route('surat-masuk.index') }}" class="nav-item active">
    <div class="left">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
      <span>Surat Masuk</span>
    </div>
  </a>

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
  <div class="content" style="padding: 40px;">
    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <h1 class="text-3xl font-bold tracking-tight text-neutral-900">Edit Surat Masuk</h1>
            <p class="text-neutral-500 mt-1">Perbarui data surat nomor {{ $surat->nomor }}</p>
        </div>

        <div class="bg-white border border-neutral-200/80 rounded-3xl p-8 md:p-10 shadow-sm">

            @if ($errors->any())
            <div class="mb-6 bg-red-50 text-red-700 text-sm rounded-xl p-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Nomor Surat</label>
                        <input type="text" name="nomor" value="{{ old('nomor', $surat->nomor) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Tanggal Terima</label>
                        <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Perihal</label>
                    <input type="text" name="perihal" value="{{ old('perihal', $surat->perihal) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Dari (Asal Surat)</label>
                    <input type="text" name="sumber" value="{{ old('sumber', $surat->sumber) }}" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Keterangan</label>
                    <textarea name="keterangan" rows="3" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-600 text-sm">{{ old('keterangan', $surat->keterangan) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Berkas/File</label>

                    @if ($surat->berkas)
                        <p class="text-xs text-neutral-500 mb-2">
                            Berkas saat ini:
                            <a href="{{ asset('storage/' . $surat->berkas) }}" target="_blank" class="text-amber-700 hover:underline">Lihat berkas</a>
                        </p>
                    @endif

                    <input type="file" name="berkas" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 cursor-pointer">
                    <p class="text-xs text-neutral-400 mt-1">Kosongkan kalau tidak ingin mengganti berkas.</p>
                </div>

                <div class="pt-3 flex gap-3">
                    <a href="{{ route('surat-masuk.index') }}" class="flex-1 text-center py-3.5 bg-neutral-100 text-neutral-700 font-semibold rounded-xl hover:bg-neutral-200 transition text-sm">Batal</a>
                    <button type="submit" class="flex-1 py-3.5 bg-neutral-900 text-white font-semibold rounded-xl hover:bg-neutral-800 transition text-sm shadow-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

</body>
</html>