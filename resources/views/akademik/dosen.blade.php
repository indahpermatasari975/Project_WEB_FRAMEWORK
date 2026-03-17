@extends('layouts.main')
@section('title', 'Data Dosen')

@section('content')
<h1>Daftar Dosen </h1>
<ol>
    @forelse ($dosen as $namaDosen)
    <li>{{ $namaDosen }}</li>
    @empty
    <div class="alert alert-warning d-inline-block">Data Dosen Tidak Tersedia</div>
        Data Dosen Tidak ada.. silahkan isi array untuk data dosen !</div>
    @endforelse
</ol>
@endsection
