// Fungsi untuk menampilkan galeri foto
function showGallery() {
    const gallery = document.querySelector('.thumbnail-images');
    const viewGalleryButton = document.querySelector('.view-gallery');
    const mainImage = document.querySelector('.main-image .placeholder');
  
    viewGalleryButton.addEventListener('click', () => {
      gallery.classList.toggle('active');
      mainImage.classList.toggle('hidden');
    });
  }
  
  // Fungsi untuk menampilkan detail kos
  function showDetails() {
    const detailsButton = document.querySelector('.details .button');
    const detailsSection = document.querySelector('.section');
  
    detailsButton.addEventListener('click', () => {
      detailsSection.classList.toggle('active');
    });
  }
  
  // Fungsi untuk menampilkan fasilitas kos
  function showFacilities() {
    const facilitiesButton = document.querySelector('.facilities .facility');
    const facilitiesSection = document.querySelector('.section');
  
    facilitiesButton.addEventListener('click', () => {
      facilitiesSection.classList.toggle('active');
    });
  }
  
  // Fungsi untuk menampilkan aturan menginap
  function showRules() {
    const rulesButton = document.querySelector('.rules .rule');
    const rulesSection = document.querySelector('.section');
  
    rulesButton.addEventListener('click', () => {
      rulesSection.classList.toggle('active');
    });
  }
  
  // Fungsi untuk menampilkan alamat lengkap
  function showAddress() {
    const addressButton = document.querySelector('.address .map');
    const addressSection = document.querySelector('.section');
  
    addressButton.addEventListener('click', () => {
      addressSection.classList.toggle('active');
    });
  }
  
  // Jalankan fungsi-fungsi di atas
  showGallery();
  showDetails();
  showFacilities();
  showRules();
  showAddress();


  