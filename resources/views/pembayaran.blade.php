<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengajuan Sewa</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{asset('css/stylepb.css')}}">
</head>
<body>
  
  <div class="container">
    <div class="main-content">
      <h1 class="section-title">Pengajuan Sewa</h1>
      <div class="progress-bar">
        <div class="active">
          <span><i class="fas fa-paper-plane"></i> Ajukan sewa</span>
        </div>
        <div>
          <span><i class="fas fa-thumbs-up"></i> Pemilik menyetujui</span>
        </div>
        <div>
          <span><i class="fas fa-money-bill-wave"></i> Bayar sewa pertama</span>
        </div>
        <div>
          <span><i class="fas fa-key"></i> Check-in</span>
        </div>
      </div>
      <div class="info-section">
        <h3 class="dektut1">Informasi penyewa
            <a class="edit-link" href="#">Ubah</a>
        </h3>

        <div class="containerpenyewa">
          <p><i class="fas fa-user"></i> Nama penyewa:</p>
          <p>Ketut Adinata</p>
      </div>
      
      <div class="containerpenyewa">
          <p><i class="fas fa-phone"></i> Nomor HP:</p>
          <p><span class="alert"><i class="fas fa-exclamation-triangle"></i> Nomor HP belum terisi</span></p>
      </div>
      
      <div class="containerpenyewa">
          <p><i class="fas fa-venus-mars"></i> Jenis kelamin:</p>
          <p>Laki-laki</p>
      </div>
      
      <div class="containerpenyewa">
          <p><i class="fas fa-briefcase"></i> Pekerjaan:</p>
          <p>Mahasiswa</p>
      </div>
      
      <div class="containerpenyewa">
          <p><i class="fas fa-school"></i> Nama perguruan tinggi:</p>
          <p>Universitas Udayana</p>
      </div>
      
        
      
      </div>
      
      <div class="info-section">
        <h3><i class="fas fa-users"></i> Jumlah penyewa</h3>
        <div class="input-group">
          <button>-</button>
          <input readonly="" type="text" value="1 orang"/>
          <button>+</button>
        </div>
        <p>Maksimal 2 orang</p>
        <div>
          <input id="spouse" type="checkbox"/>
          <label for="spouse">Membawa suami/istri</label>
        </div>
        <div>
          <input id="child" type="checkbox"/>
          <label for="child">Membawa anak</label>
        </div>
        <div class="alert">
          <i class="fas fa-exclamation-triangle"></i> Pemilik kos tidak membolehkan penyewa yang membawa anak.
        </div>
      </div>
      <div class="price-section">
        <h3><i class="fas fa-money-bill-wave"></i> Biaya sewa kos</h3>
        <p>Harga sewa per bulan: <span class="price-value">Rp1.800.000</span></p>
        <p>Biaya sebulan sekali</p>
        <p class="total-price">Total biaya sewa kos: <span class="price-value">Rp1.800.000</span></p>
      </div>
      <div class="textarea-group">
        <h3><i class="fas fa-sticky-note"></i> Catatan tambahan</h3>
        <p>Penjelasan terkait pengajuan sewa dan transaksimu</p>
        <textarea placeholder="Misal: saya membawa barang elektronik berupa TV"></textarea>
        <div class="char-count">0/200</div>
      </div>
      <div class="duration-section">
        <h3><i class="fas fa-hourglass-half"></i> Durasi ngekos</h3>
        <p>Durasi sewa dapat disesuaikan di kemudian hari</p>
        <div class="input-group">
          <button>-</button>
          <input readonly="" type="text" value="1 Bulan"/>
          <button>+</button>
        </div>
      </div>
      <div class="date-section">
        <h3><i class="fas fa-calendar-alt"></i> Tanggal mulai ngekos</h3>
        <p>Selasa, 15 Oktober 2024</p>
        <input type="date" id="start-date" style="margin-top: 10px;" />
      </div>
    </div>
    <div class="sidebar">
      <div class="box">
        <div class="details">
          <div class="image">
            <img alt="Kost Bali Duta Wisata Beach Inn Tipe A Kuta" height="150" src="https://storage.googleapis.com/a1aa/image/EhfRhuK6cHS1cauVl72Evkn5iiOtiWS1mE98uqWijbfAbtmTA.jpg" width="150"/>
          </div>
         
        </div>
        <h3><i class="fas fa-home"></i> <span>Kos Campur</span></h3>
        <p class="jukos">Kost Bali Duta Wisata Beach Inn Tipe A Kuta</p>
        <div class="containerclass">
          <p class="fasilitas"><i class="fas fa-shower"></i> K. Mandi Dalam</p>
          <p class="fasilitas"><i class="fas fa-wifi"></i> WiFi</p>
          <p class="fasilitas"><i class="fas fa-toilet"></i> Kloset Duduk</p>
          <p class="fasilitas"><i class="fas fa-bed"></i> Kasur</p>
        </div>
        
        <div class="price-summary">
       


          <h3><i class="fas fa-receipt"></i> Rincian pembayaran pertama</h3>

          <p>Dibayar setelah pemilik kos menyetujui pengajuan sewa</p>

          <div class="containerharga">
            <p>Biaya Sewa Kos:</p>
            <p> Rp1.800.000</p>

          </div>

          <div class="containerharga">
            <p>Biaya layanan KosMaPus: </p>
            <p>Rp15.000</p>

          </div>

          <p class="total-price">Total pembayaran pertama: Rp1.815.000</p>
        </div>
      </div>
      <div class="upload-section">
        <h3><i class="fas fa-file-alt"></i> Dokumen persyaratan masuk kos</h3>
        <p>Mohon melengkapi dokumen berikut yang diperlukan pemilik kos untuk verifikasi.</p>
        <p>Foto KTP</p>
        <div class="upload-box" onclick="document.getElementById('ktp-upload').click();">
          <i class="fas fa-upload"></i>
          <p>Upload di sini</p>
          <input type="file" id="ktp-upload" style="display: none;" />
          <img id="ktp-preview" style="display: none; width: 100%; margin-top: 10px;" />
        </div>
        <p>Foto diri dengan KTP</p>
        <div class="upload-box" onclick="document.getElementById('selfie-upload').click();">
          <i class="fas fa-upload"></i>
          <p>Upload di sini</p>
          <input type="file" id="selfie-upload" style="display: none;" />
          <img id="selfie-preview" style="display: none; width: 100%; margin-top: 10px;" />
        </div>
        <p>Foto kartu keluarga (opsional)</p>
        <div class="upload-box" onclick="document.getElementById('kk-upload').click();">
          <i class="fas fa-upload"></i>
          <p>Upload di sini</p>
          <input type="file" id="kk-upload" style="display: none;" />
          <img id="kk-preview" style="display: none; width: 100%; margin-top: 10px;" />
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>