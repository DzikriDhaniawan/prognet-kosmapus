<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi Pribadi</title>
</head>
<body>
    <h1>Detail Informasi Pribadi</h1>

    <ul>
        <li>Nama Lengkap: {{ $personalInfo->full_name }}</li>
        <li>Jenis Kelamin: {{ $personalInfo->gender }}</li>
        <li>Tanggal Lahir: {{ $personalInfo->birth_date }}</li>
        <li>Pekerjaan: {{ $personalInfo->job }}</li>
        <li>Instansi: {{ $personalInfo->institution }}</li>
        <li>Kota: {{ $personalInfo->city }}</li>
        <li>Status: {{ $personalInfo->status }}</li>
        <li>Pendidikan Terakhir: {{ $personalInfo->education }}</li>
        <li>Kontak Darurat: {{ $personalInfo->emergency_contact }}</li>
    </ul>

    <a href="{{ route('informasi.create') }}">Kembali ke Form</a>
</body>
</html>
