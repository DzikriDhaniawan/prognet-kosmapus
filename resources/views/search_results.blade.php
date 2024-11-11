<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian Kost</title>
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
</head>
<body>
    <h1>Hasil Pencarian Kost</h1>
    
    @if($kosts->isEmpty())
        <p>Tidak ada kost yang ditemukan.</p>
    @else
        <ul>
            @foreach($kosts as $kost)
                <li>
                    <strong>{{ $kost->nama }}</strong><br>
                    Lokasi: {{ $kost->lokasi }}<br>
                    Harga: {{ $kost->harga }}<br>
                    Durasi Sewa: {{ $kost->durasi_sewa }}<br>
                    Deskripsi: {{ $kost->deskripsi }}<br>
                    <img src="{{ $kost->gambar }}" alt="{{ $kost->nama }}" style="width:100px;height:auto;">
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Button Back ke halaman /user -->
    <br>
    <button onclick="window.location.href='/user';">Kembali ke Halaman Utama</button>
</body>
</html>
