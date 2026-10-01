<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $judul }} — {{ $surat->nomor }}</title>
<style>
    @page { margin: 25mm 20mm; }
    body { font-family: 'DejaVu Sans', sans-serif; font-size: 12px; color: #171717; }
    table { border-collapse: collapse; }
    .kop { width: 100%; border-bottom: 3px double #171717; }
    .kop td { vertical-align: middle; padding-bottom: 12px; }
    .kop h1 { font-size: 16px; margin: 0; }
    .kop p { font-size: 11px; margin: 3px 0 0; color: #525252; }
    h2 { text-align: center; font-size: 15px; margin: 26px 0 20px; }
    .detail { width: 100%; }
    .detail td { padding: 9px 6px; vertical-align: top; border-bottom: 1px solid #d4d4d4; }
    .detail td.label { width: 32%; font-weight: bold; color: #404040; }
    .dicetak { margin-top: 30px; font-size: 10px; color: #737373; text-align: right; }
</style>
</head>
<body>

<table class="kop">
    <tr>
        @if (file_exists(public_path('img/logo.png')))
        <td style="width: 70px;">
            <img src="{{ public_path('img/logo.png') }}" alt="Logo LPM" style="width: 60px; height: 60px;">
        </td>
        @endif
        <td>
            <h1>LPM · E-Arsip Surat</h1>
            <p>Universitas Dharma Wacana Metro</p>
        </td>
    </tr>
</table>

<h2>{{ $judul }}</h2>

<table class="detail">
    <tr>
        <td class="label">Nomor Surat</td>
        <td>{{ $surat->nomor }}</td>
    </tr>
    <tr>
        <td class="label">{{ $labelTanggal }}</td>
        <td>{{ \Carbon\Carbon::parse($surat->tanggal)->format('d/m/Y') }}</td>
    </tr>
    <tr>
        <td class="label">Perihal</td>
        <td>{{ $surat->perihal }}</td>
    </tr>
    <tr>
        <td class="label">{{ $labelPihak }}</td>
        <td>{{ $pihak }}</td>
    </tr>
    <tr>
        <td class="label">Keterangan</td>
        <td>{{ $surat->keterangan ?: '-' }}</td>
    </tr>
    <tr>
        <td class="label">Berkas</td>
        <td>{{ $surat->berkas ? basename($surat->berkas) : 'Tidak ada berkas' }}</td>
    </tr>
</table>

<p class="dicetak">Dicetak pada {{ now()->format('d/m/Y H:i') }}</p>

</body>
</html>