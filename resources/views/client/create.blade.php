<!DOCTYPE html>
<html>
<head>
    <title>Tambah Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
<div class="container">
    <h2>Tambah Client</h2>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Client</label>
            <input type="text" name="nama_client" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama PIC</label>
            <input type="text" name="nama_pic" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Bagian PIC</label>
            <input type="text" name="bagian_pic" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nomor PIC</label>
            <input type="text" name="nomor_pic" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>