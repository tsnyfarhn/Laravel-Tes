<!DOCTYPE html>
<html>
<head>
    <title>Data Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
<div class="container">
    <h2>Data Client</h2>
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Tambah Client</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Client</th><th>Nama Client</th><th>Alamat</th><th>Nama PIC</th><th>Bagian PIC</th><th>Nomor PIC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id_client }}</td>
                    <td>{{ $client->nama_client }}</td>
                    <td>{{ $client->alamat }}</td>
                    <td>{{ $client->nama_pic }}</td>
                    <td>{{ $client->bagian_pic }}</td>
                    <td>{{ $client->nomor_pic }}</td>
                    <td>
                       <a href="{{ route('clients.edit', $client->id_client) }}" class="btn btn-warning btn-sm">Edit</a> 
                    </td>
                    <td>
                        <form action="{{ route('clients.destroy', $client->id_client) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>