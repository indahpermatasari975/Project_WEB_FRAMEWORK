@extends('layouts.main')

@section('title', 'Data Dosen')

@section('content')

<h1>Data Dosen Jurusan TI</h1>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dosens as $dosen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dosen->nik }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->prodi }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>{{ $dosen->no_telp }}</td>
                    <td>{{ $dosen->alamat }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Data dosen tidak tersedia.</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7" class="text-end">Total Dosen: {{ $totalDosen ?? $dosens->count() }}</td>
            </tr>
        </tfoot>
    </table>
</div>

@endsection
