<!DOCTYPE html>
<html>
<head>
  <title>KosMaPus</title>
  <link rel="stylesheet" href="{{ asset('css/1.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="{{ asset('Js/1.js') }}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <div class="hero">
      <div class="header initial-header">
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo" class="logo">
            <a href="/" class="logo-text">KosMaPus</a>
        </div>
        <div class="nav">
          <a href="#search-bar">Cari Kos</a>
          <a href="#footer">Hubungi Kami</a>
          <a href="#footer">FAQ</a>
          <a href="/tentang">Tentang KosMaPus</a>
        </div>
        <div class="right">
          <a href="auth/login">
            <i class="fas fa-user"> </i> Masuk / Daftar
          </a>
        </div>
      </div>

     <div class="header new-header">
        <div class="logo-container">
          <img src="img/logo.png" alt="Logo" class="logo">
          <a href="/" class="logo-text">KosMaPus</a>
        </div>
        <div class="nav">
          <a href="#search-bar">Cari Kos</a>
          <a href="#footer">Hubungi Kami</a>
          <a href="#footer">FAQ</a>
          <a href="/tentang">Tentang KosMaPus</a>
        </div>
        <div class="right">
          <a href="auth/login">
            <i class="fas fa-user"> </i> Masuk / Daftar
          </a>
        </div>
      </div>

      <div class="geseran">
        <div class="geser active" style="background-image: url('img/kos001.png');"></div>
        <div class="geser" style="background-image: url('img/unudjim.png');"></div>
        <div class="geser" style="background-image: url('img/unudkam.png');"></div>
    </div>
      <div class="text">
        <h1>
          Temukan Kost Impianmu
          <br/>
          dan Nikmati Hidup Kampus yang Lebih Baik!
        </h1>
      </div>
      <div id="search-bar" class="search-bar">
    <form action="{{ route('search') }}" method="POST">
        @csrf
        <i class="fas fa-map-marker-alt"></i>
        <input name="lokasi" placeholder="Cari lokasi, nama gedung atau landmark..." type="text" />
        
        <i class="fas fa-calendar-alt"></i>
        <input name="tanggal_masuk" id="checkin-date" placeholder="Pilih Tanggal Masuk" type="text" />
        
        <i class="fas fa-home"></i>
        <input name="tanggal_keluar" id="checkout-date" placeholder="Pilih Tanggal Keluar" type="text" />

        <!-- Button to open filter pop-up -->
        <button type="button" onclick="openFilter()">Pilih Filter</button>

        <button type="submit">Cari Hunian</button>
    </form>
</div>

<!-- Overlay and Popup -->
<div id="filterOverlay" class="overlay">
    <div class="popup">
        <span class="close-btn" onclick="closeFilter()">&times;</span>
        <h2>Filter</h2>
        
        <!-- Filter options for sorting -->
        <div class="filter-option">
            <h3>Urutkan</h3>
            <input type="radio" id="populer" name="urutkan" value="populer">
            <label for="populer">Paling Populer</label><br>
            <input type="radio" id="terbaru" name="urutkan" value="terbaru">
            <label for="terbaru">Hunian Terbaru</label><br>
            <input type="radio" id="harga-terendah" name="urutkan" value="harga-terendah">
            <label for="harga-terendah">Harga Terendah</label><br>
            <input type="radio" id="harga-tertinggi" name="urutkan" value="harga-tertinggi">
            <label for="harga-tertinggi">Harga Tertinggi</label>
        </div>
        
        <!-- Filter options for duration -->
        <div class="filter-option">
            <h3>Durasi Sewa</h3>
            <input type="radio" id="harian" name="durasi" value="harian">
            <label for="harian">Harian</label><br>
            <input type="radio" id="bulanan" name="durasi" value="bulanan">
            <label for="bulanan">Bulanan</label><br>
            <input type="radio" id="tahunan" name="durasi" value="tahunan">
            <label for="tahunan">Tahunan</label>
        </div>
        
        <!-- Apply button -->
        <button class="apply-btn" onclick="applyFilter()">Terapkan Filter</button>
    </div>

    </div>
  </div>
  <div class="recommendations">
    <h2>Rekomendasi Kos</h2>
    <div class="carousel">
      <button class="arrow left" onclick="showPreviousCard()">
        <i class="fas fa-chevron-left"></i>
      </button>
      
<div class="cards">
  <div class="card">
    <img src="img/kos1.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Citra Indah</h3>
      <p class="kos-address">Jl. Citra No. 10, Jakarta</p>
    </div>
  </div>     

  <div class="card">
    <img src="img/2.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Bahagia</h3>
      <p class="kos-address">Jl. Bahagia No. 5, Bandung</p>
    </div>
  </div>

  <div class="card">
    <img src="img/3.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Suka Rame</h3>
      <p class="kos-address">Jl. Rame No. 7, Yogyakarta</p>
    </div>
  </div>

  <div class="card">
    <img src="img/4.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Sejahtera</h3>
      <p class="kos-address">Jl. Sejahtera No. 20, Surabaya</p>
    </div>
  </div>

  <div class="card">
    <img src="img/5.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Harmoni</h3>
      <p class="kos-address">Jl. Harmoni No. 15, Medan</p>
    </div>
  </div>

  <div class="card">
    <img src="img/6.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Ceria</h3>
      <p class="kos-address">Jl. Ceria No. 8, Semarang</p>
    </div>
  </div>

  <div class="card">
    <img src="img/9.png" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Elok</h3>
      <p class="kos-address">Jl. Elok No. 12, Bali</p>
    </div>
  </div>
  
  <div class="card">
    <img src="img/11.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Damai</h3>
      <p class="kos-address">Jl. Damai No. 3, Palembang</p>
    </div>
  </div>

  <div class="card">
    <img src="img/12.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Mewah</h3>
      <p class="kos-address">Jl. Mewah No. 1, Makassar</p>
    </div>
  </div>

  <div class="card">
    <img src="img/21.jpg" class="rekomImg" alt="Kos Image">
    <div class="card-description">
      <h3 class="kos-name">Kos Nyaman</h3>
      <p class="kos-address">Jl. Nyaman No. 6, Lombok</p>
    </div>
  </div>
</div>

      <button class="arrow right" onclick="showNextCard()">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
    <div class="indicators">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>

  <section class="kos-lokasi">
    <div class="lokasi-container">
      <h1>Kost Berdasarkan Lokasi Kampus</h1>
    </div>
    <div class="filter">
      <button class="active" id="kotaButton" onclick="showPage('kota')">Daerah</button>
      <button id="universitasButton" onclick="showPage('universitas')">Universitas</button>
    </div>
    <div class="universities" id="kota">
      <div class="university">
        <img alt="Denpasar" src="img/dps.jpg"/>
        <p>Denpasar</p>
      </div>
      <div class="university">
        <img alt="Jimbaran" src="img/jimbo.jpg"/>
        <p>Jimbaran</p>
      </div>
      <div class="university">
        <img alt="Kuta" src="img/kuta.jpg"/>
        <p>Kuta</p>
      </div>
      <div class="university">
        <img alt="Nusa Dua" src="img/nusa.jpg"/>
        <p>Nusa Dua</p>
      </div>
    </div>
    <div class="universities" id="universitas" style="display:none;">
      <div class="university">
        <img alt="UNUD Jimbaran" src="img/kampus04.jpg"/>
        <p>UNUD Jimbaran</p>
      </div>
      <div class="university">
        <img alt="ITB Stikom Renon" src="img/kampus2.jpeg"/>
        <p>ITB Stikom Renon</p>
      </div>
      <div class="university">
        <img alt="ISI Denpasar" src="img/11.jpg"/>
        <p>ISI Denpasar</p>
      </div>
      <div class="university">
        <a href="/semuakos" style="text-decoration: none;">
        <img alt="Undiksha" src="img/12.jpg"/>
        <p>Undiksha</p>
      </div>
    </div>
    <div class="view-all">
      <a href="/semuakos" style="text-decoration: none;">
      <button>Lihat Semua</button>
    </a>
  </div>

  </section>
    <div class="latest-properties">
      <h2>Kos Terbaru</h2>
      <div class="properties">
        <div class="property">
          <a href="/detail">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          </a>
          <span class="availability">Sisa 1 kamar</span>
          <div class="property-content">
            <h3>Rukita Twin Cube Tawakal Tomang</h3>
            <p>Tomang, Grogol Petamburan</p>
            <p class="price">mulai dari Rp2.600.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 1 kamar</span>
          <div class="property-content">
            <h3>Rukita Urban Coliving Pademangan</h3>
            <p>Pademangan Barat, Pademangan</p>
            <p class="price">mulai dari Rp2.100.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 3 kamar</span>
          <div class="property-content">
            <h3>Masda 3 Teluk Gong Bandengan</h3>
            <p>Pejagalan, Penjaringan</p>
            <p class="price">mulai dari Rp1.450.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 3 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 2 kamar</span>
          <div class="property-content">
            <h3>Rukita Mozza Muwardi Grogol</h3>
            <p>Grogol, Grogol Petamburan</p>
            <p class="price">mulai dari Rp2.350.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 1 kamar</span>
          <div class="property-content">
            <h3>Rukita Twin Cube Tawakal Tomang</h3>
            <p>Tomang, Grogol Petamburan</p>
            <p class="price">mulai dari Rp2.600.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 1 kamar</span>
          <div class="property-content">
            <h3>Rukita Urban Coliving Pademangan</h3>
            <p>Pademangan Barat, Pademangan</p>
            <p class="price">mulai dari Rp2.100.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 3 kamar</span>
          <div class="property-content">
            <h3>Masda 3 Teluk Gong Bandengan</h3>
            <p>Pejagalan, Penjaringan</p>
            <p class="price">mulai dari Rp1.450.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 3 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/kampus01.jpg"/>
          <span class="availability">Sisa 2 kamar</span>
          <div class="property-content">
            <h3>Rukita Mozza Muwardi Grogol</h3>
            <p>Grogol, Grogol Petamburan</p>
            <p class="price">mulai dari Rp2.350.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer" id="footer">
    <div class="left">
      <div>
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo" class="logo">
        </div>
        <div class="qr-code-container" style="margin-top: 20px;">
            <img src="img/Untitled.png" alt="QR Code" class="qr-code">
        </div>
      </div>
      <div class="download-buttons" style="margin-left: 20px; align-self: flex-end;">
        <a href="https://play.google.com/store/apps/details?id=com.oyo.consumer">Download Aplikasi</a>
        <a href="auth/login">Masuk / Daftar</a>
      </div>
    </div>
    <div class="right">
      <div class="column">
        <h3>Resource</h3>
        <p><a href="/tentang" style="color: white;">Tentang KosMaPus</a></p>
        <p><a href="#" style="color: white;">FAQ</a></p>
        <p><a href="#" style="color: white;">Karir</a></p>
        <p><a href="#" style="color: white;">Stories</a></p>
      </div>
      <div class="column">
        <h3 style="margin-bottom: 20px;">Support</h3>
        <p>
          <i class="fab fa-whatsapp"></i>
          <a href="https://chat.whatsapp.com/Ked4bwjVulZBj5nbOdtsOL" target="_blank" style="text-decoration: none; color: inherit;">+62 811-154-6477</a>
        </p>
        <p><i class="fas fa-envelope"></i> info@kosmapus.co</p>
        <p>Jam Operasional</p>
        <p>Senin - Jumat: 10.00 - 19.00</p>
        <p>Sabtu - Minggu: 10.30 - 17.00</p>
    </div>
  </div>
  <div class="bottom">
    <p>&copy; 2024 KosMaPus. All rights reserved.</p>
    <a href="#">Syarat &amp; Ketentuan</a>
    <a href="#">Kebijakan Privasi</a>
    <div class="social-icons">
      <a href="#">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#">
        <i class="fab fa-tiktok"></i>
      </a>
    </div>
  </div>
</div>
<script>
    // Initialize Flatpickr for both check-in and check-out date inputs
    flatpickr("#checkin-date", {
        dateFormat: "d M Y",  
        onChange: function(selectedDates, dateStr, instance) {
            console.log("Tanggal Masuk: " + dateStr);
        }
    });

    flatpickr("#checkout-date", {
        dateFormat: "d M Y",  // Format tanggal yang diinginkan (misal: 2024-10-07)
        onChange: function(selectedDates, dateStr, instance) {
            console.log("Tanggal Keluar: " + dateStr);
        }
    });

  let currentIndex = 0; // Indeks gambar saat ini
  const cards = document.querySelectorAll('.carousel .card'); // Ambil semua kartu
  const totalCards = cards.length; // Total jumlah kartu
  const maxVisibleCards = 7; // Maksimal kartu yang ditampilkan

  // Fungsi untuk menampilkan slide yang sesuai
  function showSlide(index) {
      // Hapus kelas 'active' dari semua kartu
      cards.forEach((card) => {
          card.classList.remove('active');
      });
      // Tambahkan kelas 'active' pada kartu yang sesuai
      cards[index].classList.add('active');
  }

  // Fungsi untuk menunjukkan slide berikutnya
  function showNextCard() {
      if (currentIndex < maxVisibleCards - 1) {
          currentIndex++; // Pindah ke slide berikutnya
      } else {
          currentIndex = 0; // Kembali ke slide pertama
      }
      updateCarousel();
  }

  // Fungsi untuk menunjukkan slide sebelumnya
  function showPreviousCard() {
      currentIndex = (currentIndex - 1 + totalCards) % totalCards; // Pindah ke slide sebelumnya
      updateCarousel();
  }

  // Fungsi untuk memperbarui carousel
  function updateCarousel() {
      const offset = -currentIndex * (cards[0].offsetWidth + 20); // Menghitung offset
      cards.forEach(card => {
          card.style.transform = `translateX(${offset}px)`; // Memindahkan kartu
      });
      updateIndicators(); // Memperbarui indikator
  }

  // Fungsi untuk memperbarui indikator (titik)
  function updateIndicators() {
      const dots = document.querySelectorAll('.indicators .dot');
      dots.forEach((dot, index) => {
          dot.classList.toggle('active', index === currentIndex); // Mengatur kelas aktif
      });
  }

  // Fungsi untuk membuat indikator berdasarkan jumlah total kartu
  function createIndicators() {
      const indicatorsContainer = document.querySelector('.indicators');
      indicatorsContainer.innerHTML = ''; // Kosongkan titik yang ada

      const visibleIndicators = Math.min(totalCards, maxVisibleCards); // Menghitung indikator yang ditampilkan

      for (let i = 0; i < visibleIndicators; i++) {
          const dot = document.createElement('span');
          dot.classList.add('dot');
          if (i === currentIndex) {
              dot.classList.add('active'); // Tambahkan kelas aktif pada titik yang sesuai
          }
          indicatorsContainer.appendChild(dot); // Tambahkan titik ke kontainer
      }
  }

  // Fungsi untuk mengubah halaman yang ditampilkan
  function showPage(page) {
    const kota = document.getElementById('kota');
    const universitas = document.getElementById('universitas');
    const kotaButton = document.getElementById('kotaButton');
    const universitasButton = document.getElementById('universitasButton');
    
    if (page === 'kota') {
      universitas.classList.add('hidden');  // Sembunyikan universitas
      kota.classList.remove('hidden');     // Tampilkan kota
      universitas.style.display = 'none';
      kota.style.display = 'flex';
      // Perbarui tombol aktif
      kotaButton.classList.add('active');
      universitasButton.classList.remove('active');
    } else {
      kota.classList.add('hidden');        // Sembunyikan kota
      universitas.classList.remove('hidden');  // Tampilkan universitas
      kota.style.display = 'none';
      universitas.style.display = 'flex';
      // Perbarui tombol aktif
      universitasButton.classList.add('active');
      kotaButton.classList.remove('active');
    }
  }
  // Panggil fungsi untuk membuat indikator
  createIndicators();
  updateCarousel(); // Inisialisasi carousel
  showSlide(currentIndex); // Tampilkan slide pertama saat halaman dimuat

  // Mengatur interval untuk otomatis berpindah slide setiap 3 detik
  setInterval(showNextCard, 3000);


// JavaScript functions to open and close the filter pop-up
function openFilter() {
        document.getElementById("filterOverlay").style.display = "flex";
    }

    function closeFilter() {
        document.getElementById("filterOverlay").style.display = "none";
    }

    // Function to apply the selected filter
    function applyFilter() {
        // Close the pop-up after applying the filter
        closeFilter();
        // You can add additional logic to handle filter values here if needed
    }

</script>
</body>
</html>