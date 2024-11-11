const slides = document.querySelectorAll('.card');
let currentIndex = 0;

function updateSlide() {
  slides.forEach((slide, index) => {
    const description = slide.querySelector('.card-description');
    if (index === currentIndex) {
      slide.classList.add('active');
      description.style.opacity = '1';
    } else {
      slide.classList.remove('active');
      description.style.opacity = '0';
    }
  });
}

setInterval(() => {
  currentIndex = (currentIndex + 1) % slides.length;
  updateSlide();
}, 3000); // Ubah slide setiap 3 detik

$('#carouselExample').on('slid.bs.carousel', function () {
    $(this).find('.carousel-item.active img').css('opacity', '1');
    $(this).find('.carousel-item:not(.active) img').css('opacity', '0');
});

