window.addEventListener("scroll", function () {
    const initialHeader = document.querySelector('.initial-header');
    const newHeader = document.querySelector('.new-header');

    if (window.scrollY > 50) {
        initialHeader.style.display = 'none'; // Sembunyikan header awal
        newHeader.classList.add('show'); // Tampilkan header baru
    } else {
        initialHeader.style.display = 'flex'; // Tampilkan kembali header awal
        newHeader.classList.remove('show'); // Sembunyikan header baru
    }
});

