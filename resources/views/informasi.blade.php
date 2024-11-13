<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pribadi</title>
    <link rel="stylesheet" href="{{ asset('css/styleif.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="header">
            Informasi Pribadi
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('informasi.store') }}" method="POST"> <!-- Tambahkan form di sini -->
            @csrf <!-- CSRF Token -->
            <div class="photo">
                <img alt="Placeholder image for profile photo" src="https://placehold.co/100x100"/>
                <button id="change-photo">
                    Ubah Foto
                </button>
            </div>
            <div class="form-group">
            <label><i class="fas fa-user"></i> Nama Lengkap</label>
                <input type="text" name="full_name" id="full-name" placeholder="Masukkan Nama" required />
            </div>
            <div class="form-group">
            <label><i class="fas fa-venus-mars"></i> Jenis Kelamin</label>
                <select name="gender" id="gender" required>
                    <option value="">
                        Pilih jenis kelamin
                    </option>
                    <option value="male">
                        Laki-laki
                    </option>
                    <option value="female">
                        Perempuan
                    </option>
                </select>
            </div>
            <div class="form-group icon">
            <label><i class="fas fa-calendar-alt"></i> Tanggal Lahir</label>
                <input type="date" name="birth_date" id="birth-date" placeholder="Masukkan Tanggal Lahir" required />
            </div>
            <div class="form-group">
            <label><i class="fas fa-briefcase"></i> Pekerjaan</label>
                <select name="job" id="job" required>
                    <option value="">
                        Pilih pekerjaan
                    </option>
                    <option value="student">
                        Mahasiswa
                    </option>
                    <option value="worker">
                        Pekerja
                    </option>
                </select>
            </div>
            <div class="form-group">
            <label><i class="fas fa-building"></i> Nama Instansi/Kampus/Sekolah</label>
                <select name="institution" id="institution">
                    <option value="">
                        Pilih nama instansi/kampus/sekolah
                    </option>
                    <option value="university">
                        Universitas
                    </option>
                    <option value="school">
                        Sekolah
                    </option>
                </select>
            </div>
            <div class="form-group">
            <label><i class="fas fa-city"></i> Kota Asal</label>
                <select name="city" id="city">
                    <option value="">
                        Pilih kota asal
                    </option>
                    <option value="denpasar">
                        Denpasar
                    </option>
                    <option value="badung">
                        Badung
                    </option>
                    <option value="badung">
                        Gianyar
                    </option>
                    <option value="badung">
                        Singaraja
                    </option>
                    <option value="badung">
                        Tabanan
                    </option>
                    <option value="badung">
                        Jembrana
                    </option>
                </select>
            </div>
            <div class="form-group">
            <label><i class="fas fa-user-check"></i> Status</label>
                <select name="status" id="status" required>
                    <option value="">
                        Pilih status
                    </option>
                    <option value="active">
                        Menikah
                    </option>
                    <option value="inactive">
                        Belum Menikah
                    </option>
                </select>
            </div>
            <div class="form-group">
            <label><i class="fas fa-graduation-cap"></i> Pendidikan Terakhir</label>
                <select name="education" id="education" required>
                    <option value="">
                        Pilih pendidikan terakhir
                    </option>
                    <option value="sma">
                        SMA
                    </option>
                    <option value="s1">
                        S1
                    </option>
                </select>
            </div>
            <div class="form-group">
            <label><i class="fas fa-phone"></i> Nomor Kontak Darurat</label>
                <input type="text" name="emergency_contact" id="emergency-contact" placeholder="+62 xxxx xxxx" />
            </div>
            <div class="buttons">
                <button type="button" class="cancel" id="cancel-button">
                    Batal
                </button>
                <button type="submit" class="save" id="save-button">
                    Simpan
                </button>
            </div>
        </form> <!-- Akhir form -->
        
    </div>
    <script src="{{ asset('js/scriptif.js') }}"></script>
</body>
</html>