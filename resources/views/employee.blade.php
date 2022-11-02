<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Query Builder</title>
</head>

<body>
    <br>
    <div class="container text-center p-4">
        <h1>Data Employees List</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($employees as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
