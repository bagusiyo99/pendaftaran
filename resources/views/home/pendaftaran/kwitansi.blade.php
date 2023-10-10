<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftaran</title>
    <style>
        /* Gaya CSS untuk kop surat */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 200px;
            margin-bottom: 10px;
        }

        .company-info {
            font-size: 14px;
            margin-top: 10px;
        }

        .document-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .separator {
            border-top: 2px solid #000;
            margin-bottom: 20px;
        }

        /* Gaya tabel data */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        /* Gaya untuk kop surat */
        .kop-surat {
            padding: 20px;
            background-color: #f0f0f0;
        }

        .kop-surat h1 {
            font-size: 18px;
            text-align: center;
            margin: 0;
        }

        .kop-surat p {
            text-align: center;
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <img src="/img/user.png" alt="Company Logo">
        <div class="company-info">
            Alamat Perusahaan<br>
            Telepon: (123) 456-7890<br>
            Email: info@example.com
        </div>
    </div>

    <!-- Kop Surat -->
    <div class="kop-surat">
        <h1>KOP SURAT</h1>
        <p>Jl. Contoh No. 123, Kota Contoh, 12345</p>
        <p>Telp: (123) 456-7890 | Email: kontak@example.com</p>
    </div>

    <!-- Judul Dokumen -->
    <div class="document-title">
        Data Pendaftaran
    </div>

    <!-- Garis Pemisah -->
    <div class="separator"></div>

    <!-- Tabel Data -->
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Whatsapp/Telpon</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $pendaftaran->nama }}</td>
                <td>{{ $pendaftaran->email }}</td>
                <td>{{ $pendaftaran->telpon }}</td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </tbody>
    </table>
</body>

</html>
