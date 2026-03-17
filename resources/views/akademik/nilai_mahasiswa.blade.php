<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container mt-4">

    <h1>Nilai Mahasiswa</h1>

    <div class="col-md-6">

        <!-- {{-- Status Lulus / Tidak Lulus --}}
        @if (($total_nilai >= 0) && ($total_nilai < 56))
            <div class="alert alert-danger">
                Maaf, anda tidak lulus
            </div>

        @elseif (($total_nilai > 55) && ($total_nilai <= 100))
            <div class="alert alert-success">
                Selamat, anda lulus
            </div>
        @endif -->

        @switch($total_nilai)

            @case(0)
                <div class="alert alert-danger"> Sangat Jelek </div>
                @break

            @case(70)
                <div class="alert alert-primary">Memuaskan </div>
                 @break

            @case(100)
                <div class="alert alert-success"> Sangat Memuaskan </div>
                @break

            @default
                <div class="alert alert-warning">Nilai tidak valid </div>

        @endswitch


        {{-- Tabel Data Mahasiswa --}}
        <table class="table table-bordered table-striped">

            <tr class="text-md-center">
                <th>Nama</th>
                <th>NIM</th>
                <th>Total Nilai</th>
            </tr>

            <tr>
                <td>{{ $nama }}</td>
                <td>{{ $nim }}</td>
                <td>{{ $total_nilai }}</td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>