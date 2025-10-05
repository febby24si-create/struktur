<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Struktur & Lembaga Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container my-5">

    <h2 class="text-center mb-5">Struktur Organisasi & Lembaga Desa</h2>

    <div class="row g-4">
        <!-- Data RW -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-primary text-white">Data RW</div>
                <div class="card-body">
                    <p><strong>ID:</strong> {{ $data['rw']['rw_id'] }}</p>
                    <p><strong>Nomor RW:</strong> {{ $data['rw']['nomor_rw'] }}</p>
                    <p><strong>Ketua RW:</strong> {{ $data['rw']['ketua_rw'] }}</p>
                    <p><strong>Keterangan:</strong> {{ $data['rw']['keterangan'] }}</p>
                </div>
            </div>
        </div>

        <!-- Data RT -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-success text-white">Data RT</div>
                <div class="card-body">
                    <p><strong>ID:</strong> {{ $data['rt']['rt_id'] }}</p>
                    <p><strong>Nomor RT:</strong> {{ $data['rt']['nomor_rt'] }}</p>
                    <p><strong>Ketua RT:</strong> {{ $data['rt']['ketua_rt'] }}</p>
                    <p><strong>Keterangan:</strong> {{ $data['rt']['keterangan'] }}</p>
                </div>
            </div>
        </div>

        <!-- Perangkat Desa -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-info text-white">Perangkat Desa</div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $data['perangkat_desa']['nama'] }}</p>
                    <p><strong>Jabatan:</strong> {{ $data['perangkat_desa']['jabatan'] }}</p>
                    <p><strong>NIP:</strong> {{ $data['perangkat_desa']['nip'] }}</p>
                    <p><strong>Kontak:</strong> {{ $data['perangkat_desa']['kontak'] }}</p>
                    <p><strong>Periode:</strong> {{ $data['perangkat_desa']['periode'] }}</p>
                </div>
            </div>
        </div>

        <!-- Lembaga Desa -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-warning text-dark">Lembaga Desa</div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $data['lembaga_desa']['nama'] }}</p>
                    <p><strong>Deskripsi:</strong> {{ $data['lembaga_desa']['deskripsi'] }}</p>
                    <p><strong>Kontak:</strong> {{ $data['lembaga_desa']['kontak'] }}</p>
                </div>
            </div>
        </div>

        <!-- Jabatan Lembaga -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-secondary text-white">Jabatan Lembaga</div>
                <div class="card-body">
                    <p><strong>Lembaga:</strong> {{ $data['jabatan_lembaga']['lembaga'] }}</p>
                    <p><strong>Nama Jabatan:</strong> {{ $data['jabatan_lembaga']['nama_jabatan'] }}</p>
                    <p><strong>Level:</strong> {{ $data['jabatan_lembaga']['level'] }}</p>
                </div>
            </div>
        </div>

        <!-- Anggota Lembaga -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-dark text-white">Anggota Lembaga</div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $data['anggota_lembaga']['nama'] }}</p>
                    <p><strong>Jabatan:</strong> {{ $data['anggota_lembaga']['jabatan'] }}</p>
                    <p><strong>Periode:</strong> {{ $data['anggota_lembaga']['periode'] }}</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>