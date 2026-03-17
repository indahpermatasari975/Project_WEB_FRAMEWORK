@extends('layouts.main')
@section('title', 'Data Prodi')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Daftar Jurusan {{ $data[0] }} Prodi {{ $data[1] }}</h2>
    <div class="row g-4 justify-content-center">
        <div class="col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="/images/logo-ti.png" class="card-img-top" alt="Logo TI">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Prodi Manajemen Informatika</h5>
                    <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil voluptate vero harum soluta reiciendis</p>
                    <a href="{{ route('prodi', ['jurusan' => 'Teknologi Informasi', 'prodi' => 'Manajemen Informatika']) }}" class="btn btn-primary align-self-start">more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="/images/logo-ti.png" class="card-img-top" alt="Logo TI">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Prodi Teknik Komputer</h5>
                    <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil voluptate vero harum soluta reiciendis</p>
                    <a href="{{ route('prodi', ['jurusan' => 'Teknologi Informasi', 'prodi' => 'Teknik Komputer']) }}" class="btn btn-primary align-self-start">more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="/images/logo-ti.png" class="card-img-top" alt="Logo TI">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Prodi Teknologi Rekayasa Perangkat Lunak</h5>
                    <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil voluptate vero harum soluta reiciendis</p>
                    <a href="{{ route('prodi', ['jurusan' => 'Teknologi Informasi', 'prodi' => 'Teknologi Rekayasa Perangkat Lunak']) }}" class="btn btn-primary align-self-start">more</a>
                </div>
            </div>
        </div>
    </div>
</div>
