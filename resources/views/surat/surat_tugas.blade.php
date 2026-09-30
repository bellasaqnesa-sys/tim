@extends('dashboardadmin.admin')

@section('content')
<style> body { background-color: #FDFBF7; } </style>

<div class="max-w-4xl mx-auto p-6 md:p-10">
    <div class="mb-6">
        <h1 class="text-3xl font-bold tracking-tight text-neutral-900">Surat Tugas</h1>
        <p class="text-neutral-500 mt-1">Catat surat tugas yang diterbitkan dan lihat rekap arsipnya</p>
    </div>

    <div class="bg-neutral-200/60 p-1.5 rounded-2xl inline-flex gap-1 mb-8 shadow-inner">
        <button onclick="switchTab('formulir')" id="btn-formulir" class="px-6 py-2.5 rounded-xl font-medium text-sm text-neutral-600">Formulir</button>
        <button onclick="switchTab('rekap')" id="btn-rekap" class="px-6 py-2.5 rounded-xl font-medium text-sm bg-white text-neutral-900 shadow-sm">Rekap Surat</button>
    </div>

    <!-- Tab Formulir -->
    <div id="tab-formulir" class="hidden bg-white border border-neutral-200/80 rounded-3xl p-6 md:p-8 shadow-sm">
        <h2 class="text-xl font-bold mb-6 text-neutral-800">Formulir Surat Tugas</h2>
        <form id="formSurat" onsubmit="tambahSurat(event)" class="space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Nomor Surat Tugas</label>
                    <input type="text" id="nomor" required placeholder="Contoh: 009/ST/IX/2026" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Tanggal Pelaksanaan</label>
                    <input type="date" id="tanggal" required class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 text-sm">
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-neutral-700 mb-2">Perihal / Kegiatan</label>
                <input type="text" id="perihal" required placeholder="Contoh: Perjalanan Dinas Monitoring Prodi" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 text-sm">
            </div>
            <div>
                <label class="block text-sm font-semibold text-neutral-700 mb-2">Petugas / Yang Ditugaskan</label>
                <input type="text" id="sumber" required placeholder="Contoh: Fakultas Teknik" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-amber-500/20 text-sm">
            </div>
            <div>
                <label class="block text-sm font-semibold text-neutral-700 mb-2">Unggah Berkas/File</label>
                <input type="file" id="berkas" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 cursor-pointer">
            </div>
            <button type="submit" class="px-6 py-3 bg-neutral-900 text-white font-medium rounded-xl hover:bg-neutral-800 transition text-sm">Simpan Surat Tugas</button>
        </form>
    </div>

    <!-- Tab Rekap -->
    <div id="tab-rekap" class="bg-white border border-neutral-200/80 rounded-3xl p-6 md:p-8 shadow-sm">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
            <h2 class="text-xl font-bold text-neutral-800">Rekap Surat Tugas</h2>
            <input type="text" id="cariInput" onkeyup="cariData()" placeholder="Cari di rekap..." class="w-full md:w-72 px-4 py-2.5 rounded-xl border border-neutral-300 focus:outline-none text-sm">
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-neutral-200 text-neutral-400 text-xs font-semibold uppercase">
                        <th class="pb-3 px-3">Nomor Surat</th>
                        <th class="pb-3 px-3">Kegiatan</th>
                        <th class="pb-3 px-3">Petugas</th>
                        <th class="pb-3 px-3">Tanggal</th>
                        <th class="pb-3 px-3">Berkas</th>
                        <th class="pb-3 px-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tabelBody" class="text-sm divide-y divide-neutral-100"></tbody>
            </table>
        </div>
        <div id="pesanKosong" class="py-12 text-center text-neutral-400 text-sm">Belum ada surat. Isi lewat tab Formulir.</div>
    </div>
</div>

<script>
    let dataList = [];
    function switchTab(tab) {
        document.getElementById('tab-formulir').classList.toggle('hidden', tab !== 'formulir');
        document.getElementById('tab-rekap').classList.toggle('hidden', tab !== 'rekap');
        document.getElementById('btn-formulir').className = tab === 'formulir' ? "px-6 py-2.5 rounded-xl font-medium text-sm bg-white text-neutral-900 shadow-sm" : "px-6 py-2.5 rounded-xl font-medium text-sm text-neutral-600";
        document.getElementById('btn-rekap').className = tab === 'rekap' ? "px-6 py-2.5 rounded-xl font-medium text-sm bg-white text-neutral-900 shadow-sm" : "px-6 py-2.5 rounded-xl font-medium text-sm text-neutral-600";
    }
    function tambahSurat(e) {
        e.preventDefault();
        dataList.push({
            nomor: document.getElementById('nomor').value,
            tanggal: document.getElementById('tanggal').value,
            perihal: document.getElementById('perihal').value,
            info: document.getElementById('sumber').value,
            berkas: document.getElementById('berkas').files[0] ? document.getElementById('berkas').files[0].name : 'Tidak ada'
        });
        document.getElementById('formSurat').reset();
        renderTabel(dataList);
        switchTab('rekap');
    }
    function renderTabel(data) {
        let tbody = document.getElementById('tabelBody');
        tbody.innerHTML = '';
        document.getElementById('pesanKosong').style.display = data.length === 0 ? 'block' : 'none';
        data.forEach((item, i) => {
            tbody.innerHTML += `<tr class="border-b"><td class="py-4 px-3 font-medium">${item.nomor}</td><td class="py-4 px-3">${item.perihal}</td><td class="py-4 px-3">${item.info}</td><td class="py-4 px-3">${item.tanggal}</td><td class="py-4 px-3 text-amber-600 text-xs">${item.berkas}</td><td class="py-4 px-3 text-center"><button onclick="dataList.splice(${i},1);renderTabel(dataList)" class="text-red-500 text-xs bg-red-50 px-2 py-1 rounded">Hapus</button></td></tr>`;
        });
    }
    function cariData() {
        let keyword = document.getElementById('cariInput').value.toLowerCase();
        renderTabel(dataList.filter(item => item.nomor.toLowerCase().includes(keyword) || item.perihal.toLowerCase().includes(keyword)));
    }
    renderTabel(dataList);
</script>
@endsection