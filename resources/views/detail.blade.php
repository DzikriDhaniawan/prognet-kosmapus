<!DOCTYPE html>
<html>
<head>
  <title>KosMaPus</title>
  <link rel="stylesheet" href="{{asset('css/detail.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body>
    <div class="header">
        <div class="logo">
          <img src="img/logo.png" alt="Logo" class="logo">
          <a href="/user" style="text-decoration: none;">KosMaPus</a>
        </div>
        <div class="nav">
          <a href="1.html#search-bar">Cari Kos</a>
          <a href="1.html#footer">Hubungi Kami</a>
          <a href="1.html#footer">FAQ</a>
          <a href="tentang.html">Tentang KosMaPus</a>
        </div>
        <div class="auth">
          <a href="login">
            <i class="fas fa-user"></i>
          </a>
        </div>
      </div>
      <div class="container">
        <div class="main-image">
          <div class="placeholder">
            <img src="img/d1.jpg" alt="Main Image" />
          </div>
          <div class="thumbnail-images">
            <div class="placeholder">
                <img src="img/d2.jpg" alt="Thumbnail 1" />
            </div>
            <div class="placeholder">
                <img src="img/d3.jpg" alt="Thumbnail 2" />
            </div>
            <div class="placeholder">
                <img src="img/d4.jpg" alt="Thumbnail 3" />
            </div>
            <div class="placeholder">
                <img src="img/d5.jpg" alt="Thumbnail Gallery" style="width: 100%; height: 100%; object-fit: cover;" />
                <a href="/gallery" class="view-gallery">Lihat semua</a>
            </div>
          </div>
        </div>
    </div>

    <div class="details">
      <div>
        <div class="title">Kost Pak De Darno</div>
        <div class="location">
          <i class="fas fa-map-marker-alt"></i>
          JL. Merpati No. 12, Denpasar, Bali
        </div>
      </div>
      <div>
        <div class="price" style="margin-left: 20px;">Rp1.800.000 <span>/bulan</span></div>
        <div class="actions">
          <i class="fas fa-comment-dots chat-icon"></i>
          <a href="/pembayaran" style="text-decoration: none;">
          <div class="button">Pesan Sekarang</div></a>
        </div>
      </div>
    </div>
    <div class="tags">
      <div class="tag">Kos Putri</div>
      <div class="verified">Terverifikasi</div>
    </div>
    <div class="section">
      <div class="title">Fasilitas</div>
      <div class="facilities">
        <div class="facility">
          <i class="fas fa-wifi"></i>
          Wifi
        </div>
        <div class="facility">
          <i class="fas fa-broom"></i>
          Cleaning
        </div>
        <div class="facility">
          <i class="fas fa-tshirt"></i>
          Laundry
        </div>
        <div class="facility">
          <i class="fas fa-video"></i>
          CCTV
        </div>
        <div class="facility">
          <i class="fas fa-ice-cream"></i>
          Kulkas
        </div>
        <div class="facility">
          <i class="fas fa-tint"></i>
          Dispenser
        </div>
      </div>
    </div>
    <div class="section">
      <div class="title">Aturan Menginap</div>
      <div class="rules">
        <div class="rule">
          <i class="fas fa-clock"></i>
          Akses 24 Jam
        </div>
        <div class="rule">
          <i class="fas fa-user-tie"></i>
          Khusus karyawan
        </div>
        <div class="rule">
          <i class="fas fa-users"></i>
          Boleh pasutri
        </div>
        <div class="rule">
          <i class="fas fa-user-graduate"></i>
          Khusus Mahasiswa
        </div>
        <div class="rule">
          <i class="fas fa-user-friends"></i>
          Maks. 2 orang/kamar
        </div>
      </div>
    </div>
    <div class="section">
        <div class="title">Alamat Lengkap</div>
        <div class="address">
            <a href="https://maps.app.goo.gl/uXeuVwkedKmFgScs9" target="_blank" class="map-link">
                <iframe 
                    src="https://maps.google.com/maps?q=-8.681626,115.162476&hl=es;z=14&output=embed" 
                    width="600" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </a>
        </div>
    </div>    
</div>
<script src="{{asset('Js/detail.js')}}detail.js"></script>
</body>
</html>