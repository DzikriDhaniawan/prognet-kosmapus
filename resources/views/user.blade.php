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
          <a href="/informasi">
            <i class="fas fa-user"></i>
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
          <a href="/informasi">
            <i class="fas fa-user"></i>
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
  
<!-- Section Rekomendasi Kos --> 
<div class="recommendations"> 
  <h2>Rekomendasi Kos</h2> 
  <div class="carousel"> 
    <button class="arrow left" onclick="showPreviousCard()"> 
      <i class="fas fa-chevron-left"></i>
     </button> 
     <div class="cards"> 
      @foreach($rekomendasiKost as $kost) 
      <div class="card"> 
        <a href="{{ route('kost.show', $kost->idKost) }}"> 
          <img src="{{ asset($kost->fotoKost1) }}" class="rekomImg" alt="Kos Image"> 
          <div class="card-description"> 
            <h3 class="kos-name">{{ $kost->namaKost }}</h3> 
            <p class="kos-address">{{ $kost->alamatKost }}</p> 
          </div> </a> </div> 
          @endforeach
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
      <a href="/semuakos" style="text-decoration: none;"></a>
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
          <a href="/detail?idKost=1">
          <img alt="Placeholder image" src="img/r1.jpg"/>
          </a>
          <span class="availability">Penuh</span>
          <div class="property-content">
            <h3>Kost Pak De Darno</h3>
            <p>Denpasar, Bali</p>
            <p class="price">mulai dari Rp1.800.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>

        <div class="property">
          <img alt="Placeholder image" src="img/r2.jpg"/>
          <span class="availability">Sisa 1 kamar</span>
          <div class="property-content">
            <h3>Kost Bu De Darmi</h3>
            <p>Jimbaran, Bali</p>
            <p class="price">mulai dari Rp2.100.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/r3.jpg"/>
          <span class="availability">Sisa 3 kamar</span>
          <div class="property-content">
            <h3>Penginapan Darma</h3>
            <p>Canggu, Bali</p>
            <p class="price">mulai dari Rp1.450.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 3 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/r5.jpg"/>
          <span class="availability">Sisa 2 kamar</span>
          <div class="property-content">
            <h3>Rumah Kost Melati</h3>
            <p>Monang Maning, Denpasar, Bali</p>
            <p class="price">mulai dari Rp2.350.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/r4.jpg"/>
          <span class="availability">Penuh</span>
          <div class="property-content">
            <h3>Indomar Kost</h3>
            <p>Kuta, Bali</p>
            <p class="price">mulai dari Rp2.600.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/r6.jpg"/>
          <span class="availability">Sisa 1 kamar</span>
          <div class="property-content">
            <h3>Kost Bu Tutink</h3>
            <p>Nusa Dua, Bali</p>
            <p class="price">mulai dari Rp2.100.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/r7.jpg"/>
          <span class="availability">Sisa 3 kamar</span>
          <div class="property-content">
            <h3>Kost Elite Bos Man</h3>
            <p>Ubud, Bali</p>
            <p class="price">mulai dari Rp1.450.000 /bulan</p>
            <p class="voucher"><i class="fas fa-ticket-alt"></i> 3 Voucher s/d 350rb</p>
          </div>
        </div>
        <div class="property">
          <img alt="Placeholder image" src="img/r8.jpg"/>
          <span class="availability">NEW</span>
          <div class="property-content">
            <h3>Kost Udayana</h3>
            <p>Sudirman, Denpasar, Bali</p>
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
      </div>
    </div>
    <div class="right">
      <div class="column">
        <h3>Resource</h3>
        <p><a href="/tentang" style="color: white;">Tentang KosMaPus</a></p>
        <p><a href="/faq" style="color: white;">FAQ</a></p>
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

function openFilter() {
        document.getElementById("filterOverlay").style.display = "flex";
    }

    function closeFilter() {
        document.getElementById("filterOverlay").style.display = "none";
    }

    function applyFilter() {
        closeFilter();
    }
</script>
<script>

flatpickr("#checkin-date", {
        dateFormat: "d M Y",  
        onChange: function(selectedDates, dateStr, instance) {
            console.log("Tanggal Masuk: " + dateStr);
        }
    });

    flatpickr("#checkout-date", {
        dateFormat: "d M Y",
        onChange: function(selectedDates, dateStr, instance) {
            console.log("Tanggal Keluar: " + dateStr);
        }
    });

  let currentIndex = 0;
  const cards = document.querySelectorAll('.carousel .card');
  const totalCards = cards.length;
  const maxVisibleCards = 7; // Maksimal kartu yang ditampilkan

  function showSlide(index) {
      cards.forEach((card) => {
          card.classList.remove('active');
      });
      cards[index].classList.add('active');
  }

  function showNextCard() {
      if (currentIndex < maxVisibleCards - 1) {
          currentIndex++;
      } else {
          currentIndex = 0; 
      }
      updateCarousel();
  }

  function showPreviousCard() {
      currentIndex = (currentIndex - 1 + totalCards) % totalCards;
      updateCarousel();
  }

  function updateCarousel() {
      const offset = -currentIndex * (cards[0].offsetWidth + 20);
      cards.forEach(card => {
          card.style.transform = `translateX(${offset}px)`;
      });
      updateIndicators();
  }

  function updateIndicators() {
      const dots = document.querySelectorAll('.indicators .dot');
      dots.forEach((dot, index) => {
          dot.classList.toggle('active', index === currentIndex);
      });
  }

  function createIndicators() {
      const indicatorsContainer = document.querySelector('.indicators');
      indicatorsContainer.innerHTML = '';

      const visibleIndicators = Math.min(totalCards, maxVisibleCards);

      for (let i = 0; i < visibleIndicators; i++) {
          const dot = document.createElement('span');
          dot.classList.add('dot');
          if (i === currentIndex) {
              dot.classList.add('active');
          }
          indicatorsContainer.appendChild(dot);
      }
  }

  function showPage(page) {
    const kota = document.getElementById('kota');
    const universitas = document.getElementById('universitas');
    const kotaButton = document.getElementById('kotaButton');
    const universitasButton = document.getElementById('universitasButton');
    
    if (page === 'kota') {
      universitas.classList.add('hidden');    
      kota.classList.remove('hidden');       
      universitas.style.display = 'none';
      kota.style.display = 'flex';

      kotaButton.classList.add('active');
      universitasButton.classList.remove('active');
    } else {
      kota.classList.add('hidden');      
      universitas.classList.remove('hidden');
      kota.style.display = 'none';
      universitas.style.display = 'flex';

      universitasButton.classList.add('active');
      kotaButton.classList.remove('active');
    }
  }

  createIndicators();
  updateCarousel();
  showSlide(currentIndex);

  setInterval(showNextCard, 3000);

</script>

</body>
</html>