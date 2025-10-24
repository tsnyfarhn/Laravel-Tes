<!DOCTYPE html>
<html>
<head>
    <title>Edit Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
<div class="container">

    <h2>Edit Client</h2>
    <form action="{{ route('clients.update', $client->id_client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Client</label>
            <input type="text" name="nama_client" value="{{ old('nama_client', $client->nama_client) }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat', $client->alamat) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama PIC</label>
            <input type="text" name="nama_pic" value="{{ old('nama_pic', $client->nama_pic) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Bagian PIC</label>
            <input type="text" name="bagian_pic" value="{{ old('bagian_pic', $client->bagian_pic) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nomor PIC</label>
            <input type="text" name="nomor_pic" value="{{ old('nomor_pic', $client->nomor_pic) }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>