<!DOCTYPE html>
<html>
<head>
    <title>{{ $detailKost->namaKost }}</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <script src="{{ asset('js/detail.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
            <a href="/user" style="text-decoration: none;">KosMaPus</a>
        </div>
        <div class="nav">
            <a href="1.html#search-bar">Cari Kos</a>
            <a href="1.html#footer">Hubungi Kami</a>
            <a href="1.html#footer">FAQ</a>
            <a href="tentang.html">Tentang KosMaPus</a>
        </div>
        <div class="auth">
            <a href="{{ url('login') }}">
                <i class="fas fa-user"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="main-image">
            <div class="placeholder">
                <img src="{{ asset($detailKost->fotoKost1) }}" alt="Main Image" />
            </div>
            <div class="thumbnail-images">
                <div class="placeholder">
                    <img src="{{ asset($detailKost->fotoKost2) }}" alt="Thumbnail 1" />
                </div>
                <div class="placeholder">
                    <img src="{{ asset($detailKost->fotoKost3) }}" alt="Thumbnail 2" />
                </div>
                <div class="placeholder">
                    <img src="{{ asset($detailKost->fotoKost4) }}" alt="Thumbnail 3" />
                </div>
                <div class="placeholder">
                    <img src="{{ asset($detailKost->fotoKost5) }}" alt="Thumbnail Gallery" style="width: 100%; height: 100%; object-fit: cover;" />
                    <a href="/gallery" class="view-gallery">Lihat semua</a>
                </div>
            </div>
        </div>
    </div>
    <div class="details">
        <div>
            <div class="title">{{ $detailKost->namaKost }}</div>
            <div class="location">
                <i class="fas fa-map-marker-alt"></i>
                {{ $detailKost->alamatKost }}
            </div>
        </div>
        <div>
            <div class="price" style="margin-left: 20px;">{{ $detailKost->hargaKost }} <span>/bulan</span></div>
            <div class="actions">
                <i class="fas fa-comment-dots chat-icon"></i>
                <a href="/pembayaran" style="text-decoration: none;">
                    <div class="button">Pesan Sekarang</div>
                </a>
            </div>
        </div>
    </div>
    <div class="tags">
        <div class="tag">{{ $detailKost->tagKost }}</div>
        <div class="verified">Terverifikasi</div>
    </div>
    <div class="section">
        <div class="title">Fasilitas</div>
        <div class="facilities">
            <div class="facility">
                <i class="fas fa-wifi"></i>
                {{ $detailKost->fasilitasKost1 }}
            </div>
            <div class="facility">
                <i class="fas fa-broom"></i>
                {{ $detailKost->fasilitasKost2 }}
            </div>
            <div class="facility">
                <i class="fas fa-tshirt"></i>
                {{ $detailKost->fasilitasKost3 }}
            </div>
            <div class="facility">
                <i class="fas fa-video"></i>
                {{ $detailKost->fasilitasKost4 }}
            </div>
            <div class="facility">
                <i class="fas fa-ice-cream"></i>
                {{ $detailKost->fasilitasKost5 }}
            </div>
        </div>
    </div>
    <div class="section">
        <div class="title">Aturan Menginap</div>
        <div class="rules">
            <div class="rule">
                <i class="fas fa-clock"></i>
                {{ $detailKost->aturanKost1 }}
            </div>
            <div class="rule">
                <i class="fas fa-user-tie"></i>
                {{ $detailKost->aturanKost2 }}
            </div>
            <div class="rule">
                <i class="fas fa-users"></i>
                {{ $detailKost->aturanKost3 }}
            </div>
            <div class="rule">
                <i class="fas fa-user-graduate"></i>
                {{ $detailKost->aturanKost4 }}
            </div>
            <div class="rule">
                <i class="fas fa-user-friends"></i>
                {{ $detailKost->aturanKost5 }}
            </div>
        </div>
    </div>

    <div class="section">
        <div class="title">Alamat Lengkap</div>
        <div class="address">
            <a href="{{ $detailKost->googleMapsKost }}" target="_blank" class="map-link">
                <iframe 
                    src="https://maps.google.com/maps?q={{ urlencode($detailKost->alamatKost) }}&hl=es;z=14&output=embed" 
                    width="600" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe> 
            </a>
        </div>
    </div>
    
</body>
</html>
