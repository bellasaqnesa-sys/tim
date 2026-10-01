<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Dashboard Admin — E-Arsip Surat LPM UDW</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<aside class="sidebar">
  <div class="brand">
    <img class="brand-logo" src="{{ asset('img/logo.png') }}" alt="LPM">
    <div>
      <div class="brand-name">LPM · E-Arsip Surat</div>
      <div class="brand-sub">Universitas Dharma Wacana Metro</div>
    </div>
  </div>

  <div class="nav-label">MENU UTAMA</div>
  <a href="{{ route('dashboard.admin') }}" class="nav-item active">
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
    <button type="submit" class="nav-item logout">
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
    <div class="icon-btn">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
      <span class="dot"></span>
    </div>
    <div class="icon-btn">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06-.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
    </div>
    <div class="profile">
      <div class="avatar">{{ strtoupper(mb_substr(auth()->user()->name, 0, 2)) }}</div>
      <div class="profile-name">
        {{ auth()->user()->name }}
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 9l6 6 6-6"/></svg>
      </div>
    </div>
  </div>

  <div class="content">

    <div class="page-head">
      <div class="page-head-text">
        <h1>Selamat datang kembali, {{ auth()->user()->name }}</h1>
        <p>Ringkasan arsip surat · Lembaga Penjaminan Mutu, Universitas Dharma Wacana Metro</p>
      </div>
      <div class="page-head-actions">
        <button class="btn btn-primary">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M12 5v14M5 12h14"/></svg>
          Tambah Surat
        </button>
        <button class="btn btn-alert">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          3 Surat Menunggu Persetujuan
        </button>
      </div>
    </div>

    <div class="stats">
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon" style="background:linear-gradient(145deg,var(--orange),var(--orange-dark))">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
          </div>
          <span class="stat-badge up">+12%</span>
        </div>
        <div class="stat-value">124</div>
        <div class="stat-label">Surat Masuk bulan ini</div>
      </div>
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon" style="background:linear-gradient(145deg,var(--amber),#D98A12)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
          </div>
          <span class="stat-badge up">+6%</span>
        </div>
        <div class="stat-value">45</div>
        <div class="stat-label">Surat Keluar bulan ini</div>
      </div>
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon" style="background:linear-gradient(145deg,var(--amber),#D98A12)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          </div>
          <span class="stat-badge down">-3%</span>
        </div>
        <div class="stat-value">18</div>
        <div class="stat-label">Surat Tugas aktif</div>
      </div>
      <div class="stat-card">
        <div class="stat-top">
          <div class="stat-icon" style="background:linear-gradient(145deg,#4A72D9,var(--blue))">
            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
          </div>
          <span class="stat-badge up">+9%</span>
        </div>
        <div class="stat-value">96%</div>
        <div class="stat-label">Surat diselesaikan tepat waktu</div>
      </div>
    </div>

    <div class="body-grid">

      <div class="panel">
        <div class="panel-head">
          <h2>Aktivitas Surat Terbaru</h2>
          <div class="tabs">
            <div class="tab active">Semua</div>
            <div class="tab">Surat Masuk</div>
            <div class="tab">Surat Keluar</div>
            <div class="tab">Surat Tugas</div>
          </div>
        </div>
        <table>
          <thead>
            <tr>
              <th>Nomor Surat</th>
              <th>Perihal</th>
              <th>Asal / Tujuan</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="doc-num">005/SM/IX/2026</div><div class="doc-type">Surat Masuk</div></td>
              <td>Undangan Rapat Koordinasi Mutu</td>
              <td>Dinas Pendidikan</td>
              <td>16 Sep 2026</td>
              <td><span class="badge selesai">Selesai</span></td>
              <td>
                <div class="row-actions">
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></button>
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg></button>
                </div>
              </td>
            </tr>
            <tr>
              <td><div class="doc-num">012/SK/IX/2026</div><div class="doc-type">Surat Keluar</div></td>
              <td>Surat Keputusan Tim Audit Mutu Internal</td>
              <td>Internal LPM</td>
              <td>15 Sep 2026</td>
              <td><span class="badge diarsipkan">Diarsipkan</span></td>
              <td>
                <div class="row-actions">
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></button>
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg></button>
                </div>
              </td>
            </tr>
            <tr>
              <td><div class="doc-num">009/ST/IX/2026</div><div class="doc-type">Surat Tugas</div></td>
              <td>Perjalanan Dinas Monitoring Prodi</td>
              <td>Fakultas Teknik</td>
              <td>14 Sep 2026</td>
              <td><span class="badge diproses">Diproses</span></td>
              <td>
                <div class="row-actions">
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></button>
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg></button>
                </div>
              </td>
            </tr>
            <tr>
              <td><div class="doc-num">003/SM/IX/2026</div><div class="doc-type">Surat Masuk</div></td>
              <td>Permohonan Data Akreditasi Program Studi</td>
              <td>BAN-PT</td>
              <td>12 Sep 2026</td>
              <td><span class="badge selesai">Selesai</span></td>
              <td>
                <div class="row-actions">
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></button>
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg></button>
                </div>
              </td>
            </tr>
            <tr>
              <td><div class="doc-num">021/SK/VIII/2026</div><div class="doc-type">Surat Keluar</div></td>
              <td>Balasan Konfirmasi Jadwal Visitasi</td>
              <td>LLDIKTI Wilayah II</td>
              <td>29 Agu 2026</td>
              <td><span class="badge diproses">Diproses</span></td>
              <td>
                <div class="row-actions">
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></button>
                  <button><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="side-col">
        <div class="panel">
          <div class="panel-head"><h2>Tugas Hari Ini</h2></div>
          <div class="task-list">
            <div class="task">
              <div class="task-dot filled"></div>
              <div>
                <div class="task-title">Verifikasi surat masuk BAN-PT</div>
                <div class="task-meta">Selesai · 09:20</div>
              </div>
            </div>
            <div class="task">
              <div class="task-dot"></div>
              <div>
                <div class="task-title">Arsipkan SK Tim Audit Mutu</div>
                <div class="task-meta">Tenggat 17:00</div>
              </div>
            </div>
            <div class="task">
              <div class="task-dot"></div>
              <div>
                <div class="task-title">Siapkan draf laporan bulanan</div>
                <div class="task-meta">Tenggat besok</div>
              </div>
            </div>
            <div class="task">
              <div class="task-dot"></div>
              <div>
                <div class="task-title">Kirim balasan ke LLDIKTI Wil. II</div>
                <div class="task-meta">Tenggat Jumat</div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel">
          <div class="panel-head"><h2>Distribusi Status Surat</h2></div>
          <div class="donut-wrap">
            <svg width="110" height="110" viewBox="0 0 42 42">
              <circle cx="21" cy="21" r="15.9" fill="transparent" stroke="#ECE8E0" stroke-width="6"></circle>
              <circle cx="21" cy="21" r="15.9" fill="transparent" stroke="#F0A828" stroke-width="6"
                stroke-dasharray="55 45" stroke-dashoffset="25" stroke-linecap="round"></circle>
              <circle cx="21" cy="21" r="15.9" fill="transparent" stroke="#D64545" stroke-width="6"
                stroke-dasharray="20 80" stroke-dashoffset="-30" stroke-linecap="round"></circle>
              <circle cx="21" cy="21" r="15.9" fill="transparent" stroke="#3E63C2" stroke-width="6"
                stroke-dasharray="25 75" stroke-dashoffset="-50" stroke-linecap="round"></circle>
            </svg>
            <div class="legend">
              <div class="legend-row">
                <div class="legend-key"><span class="sw" style="background:#F0A828"></span>Selesai</div>
                <div class="legend-val">55%</div>
              </div>
              <div class="legend-row">
                <div class="legend-key"><span class="sw" style="background:#D64545"></span>Diproses</div>
                <div class="legend-val">20%</div>
              </div>
              <div class="legend-row">
                <div class="legend-key"><span class="sw" style="background:#3E63C2"></span>Diarsipkan</div>
                <div class="legend-val">25%</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>