// Fungsi untuk menambah jumlah penyewa
function incrementOccupants() {
    const input = document.querySelector('input[type="text"][value="1 orang"]');
    let value = parseInt(input.value.split(' ')[0]);
    if (value < 2) {
        value += 1;
        input.value = value + ' orang';
    }
}

// Fungsi untuk mengurangi jumlah penyewa
function decrementOccupants() {
    const input = document.querySelector('input[type="text"][value="1 orang"]');
    let value = parseInt(input.value.split(' ')[0]);
    if (value > 1) {
        value -= 1;
        input.value = value + ' orang';
    }
}

// Fungsi untuk menambah durasi sewa
function incrementDuration() {
    const input = document.querySelector('input[type="text"][value="1 Bulan"]');
    let value = parseInt(input.value.split(' ')[0]);
    value += 1;
    input.value = value + ' Bulan';
}

// Fungsi untuk mengurangi durasi sewa
function decrementDuration() {
    const input = document.querySelector('input[type="text"][value="1 Bulan"]');
    let value = parseInt(input.value.split(' ')[0]);
    if (value > 1) {
        value -= 1;
        input.value = value + ' Bulan';
    }
}

// Fungsi untuk menghitung karakter di catatan tambahan
function countCharacters() {
    const textarea = document.querySelector('textarea');
    const charCount = document.querySelector('.char-count');
    const maxLength = 200;
    const currentLength = textarea.value.length;
    charCount.textContent = `${currentLength}/${maxLength}`;
    
    if (currentLength > maxLength) {
        charCount.style.color = 'red';
    } else {
        charCount.style.color = '#999';
    }
}

// Fungsi untuk menampilkan alert saat ajukan sewa
function showAlert() {
    alert("Pengajuan sewa telah diajukan!");
}

// Event listener untuk menambah dan mengurangi jumlah penyewa
document.querySelector('.input-group button:nth-child(1)').addEventListener('click', decrementOccupants);
document.querySelector('.input-group button:nth-child(3)').addEventListener('click', incrementOccupants);

// Event listener untuk menambah dan mengurangi durasi sewa
document.querySelector('.duration-section .input-group button:nth-child(1)').addEventListener('click', decrementDuration);
document.querySelector('.duration-section .input-group button:nth-child(3)').addEventListener('click', incrementDuration);

// Event listener untuk menghitung karakter pada catatan tambahan
document.querySelector('textarea').addEventListener('input', countCharacters);

// Event listener untuk tombol ajukan sewa
document.querySelector('.submit-button').addEventListener('click', showAlert);

// Fungsi untuk mengubah data penyewa dengan prompt
function editTenantInfo() {
    const tenantName = prompt("Masukkan Nama Penyewa", document.querySelector('.info-section p:nth-child(2)').innerText.split(': ')[1]);
    const tenantPhone = prompt("Masukkan Nomor HP Penyewa", document.querySelector('.info-section p:nth-child(3)').innerText.split(': ')[1]);
    const tenantJob = prompt("Masukkan Pekerjaan Penyewa", document.querySelector('.info-section p:nth-child(5)').innerText.split(': ')[1]);
    const tenantUniversity = prompt("Masukkan Nama Perguruan Tinggi", document.querySelector('.info-section p:nth-child(6)').innerText.split(': ')[1]);

    if (tenantName) document.querySelector('.info-section p:nth-child(2)').innerHTML = `Nama penyewa: <br/>${tenantName}`;
    if (tenantPhone) document.querySelector('.info-section p:nth-child(3)').innerHTML = `Nomor HP: <br/><span>${tenantPhone}</span>`;
    if (tenantJob) document.querySelector('.info-section p:nth-child(5)').innerHTML = `Pekerjaan: <br/>${tenantJob}`;
    if (tenantUniversity) document.querySelector('.info-section p:nth-child(6)').innerHTML = `Nama perguruan tinggi: <br/>${tenantUniversity}`;
}

// Fungsi untuk mengubah dan menampilkan langsung tanggal sewa
function changeStartDate() {
    const startDate = document.getElementById('start-date').value;
    if (startDate) {
        const formattedDate = new Date(startDate).toLocaleDateString('id-ID', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
        document.querySelector('.date-section p').textContent = formattedDate;
    }
}

// Fungsi untuk menampilkan preview gambar di file uploader
function previewImage(input, imagePreviewElement) {
    const file = input.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreviewElement.src = e.target.result;
            imagePreviewElement.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}

// Fungsi untuk menambah interaktivitas pada setiap uploader
function setupUploaders() {
    const ktpUploader = document.getElementById('ktp-upload');
    const selfieUploader = document.getElementById('selfie-upload');
    const kkUploader = document.getElementById('kk-upload');
    
    const ktpPreview = document.getElementById('ktp-preview');
    const selfiePreview = document.getElementById('selfie-preview');
    const kkPreview = document.getElementById('kk-preview');

    ktpUploader.addEventListener('change', function() {
        previewImage(this, ktpPreview);
    });

    selfieUploader.addEventListener('change', function() {
        previewImage(this, selfiePreview);
    });

    kkUploader.addEventListener('change', function() {
        previewImage(this, kkPreview);
    });
}

// Inisialisasi saat halaman siap
document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk mengedit informasi penyewa
    document.querySelector('.info-section .edit-link').addEventListener('click', editTenantInfo);
    
    // Fungsi untuk mengubah tanggal sewa
    document.getElementById('start-date').addEventListener('change', changeStartDate);
    
    // Menyiapkan uploader gambar
    setupUploaders();
});

// Pasang event listener pada semua tombol "Ubah"
document.querySelectorAll('.edit-link').forEach(link => {
    link.addEventListener('click', function(event) {
        if (event.target.closest('.info-section')) {
            editTenantInfo();
        } else if (event.target.closest('.date-section')) {
            document.getElementById('start-date').focus();
        } else if (event.target.closest('.price-section')) {
            alert("Fitur ubah biaya belum tersedia.");
        }
    });
});