const pages = [
    {
      content: `
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Rukita Twin Cube Tawakal Tomang</div>
            <div class="card-location">Tomang, Grogol Petamburan</div>
            <div class="card-price">mulai dari Rp2.600.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 1 kamar</div>
          </div>
        </div>
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Rukita Urban Coliving Pademangan</div>
            <div class="card-location">Pademangan Barat, Pademangan</div>
            <div class="card-price">mulai dari Rp2.100.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 1 kamar</div>
          </div>
        </div>
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Masda 3 Teluk Gong Bandengan</div>
            <div class="card-location">Pejagalan, Penjaringan</div>
            <div class="card-price">mulai dari Rp1.450.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 3 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 3 kamar</div>
          </div>
        </div>
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Rukita Mozza Muwardi Grogol</div>
            <div class="card-location">Grogol, Grogol Petamburan</div>
            <div class="card-price">mulai dari Rp2.350.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 2 kamar</div>
          </div>
        </div>
      `,
    },
  
    {
      content: `
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Rukita Urban Coliving Pademangan</div>
            <div class="card-location">Pademangan Barat, Pademangan</div>
            <div class="card-price">mulai dari Rp2.100.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 1 kamar</div>
          </div>
        </div>
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Masda 3 Teluk Gong Bandengan</div>
            <div class="card-location">Pejagalan, Penjaringan</div>
            <div class="card-price">mulai dari Rp1.450.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 3 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 3 kamar</div>
          </div>
        </div>
        <div class="card">
          <img src="https://storage.googleapis.com/a1aa/image/nhVYHjboaeXfCUkUk6twdNNsmxxffEOjqBh2cjUMuiOqeN3cC.jpg" alt="Kos Image" height="150" width="300">
          <div class="card-content">
            <div class="card-title">Rukita Mozza Muwardi Grogol</div>
            <div class="card-location">Grogol, Grogol Petamburan</div>
            <div class="card-price">mulai dari Rp2.350.000 /bulan</div>
            <div class="card-voucher"><i class="fas fa-ticket-alt"></i> 5 Voucher s/d 350rb</div>
            <div class="card-availability">Sisa 2 kamar</div>
          </div>
        </div>
      `,
    },
  ];
  
  function loadPage(pageNumber) {
    const content = document.getElementById('content');
    if (pageNumber >= 1 && pageNumber <= pages.length) {
      content.innerHTML = pages[pageNumber - 1].content;
    } else {
      content.innerHTML = '<p>Page not found</p>';
    }
  }
  
  loadPage(1); // Loads the first page by default
  