<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    echo "Halaman Home <br>";
    echo "Baris kedua";
});

Route::get('/mahasiswa/ti/udin', function(){
    echo "Selamat Datang Udin";
});

//route parameter
Route::get('/mahasiswa/{nama}', function($nama){
    return "Selamat Datang $nama";
});

Route::get('/mahasiswa/{nama}/{nim}', function($nama, $nim){
    return "Selamat Datang $nama, NIM:$nim";
});

//route optional parameter
Route::get('/dosen/{nama?}/{nip?}', function($nama="", $nip=""){
    return "Selamat Datang $nama, NIP:$nip";
});

//route pnp jurusan
Route::get('/pnp/jurusan/{kode}/{program}', function($kode, $program){
    $jurusan = request()->query('jurusan', '');
    return "PNP - Jurusan: $jurusan (Kode: $kode, Program: $program)";
});

//route redirect
Route::redirect('/home','/');

//route fallback
Route::fallback(function(){
    return "Halaman tidak di temukan";
});

// Route::get('/mahasiswa', function(){
//     return view('akademik.mahasiswa',
//     [
//         'mhs1'=>' mark zuckerberng',
//         'mhs2'=>'Indah '
//     ]);
//     //return view('akademik.mahasiswa'$arrMhs); // parameter ke 2 view
//     return view('akademik.mahasiswa')->with($arrMhs); // method with
// });

// Route::get('/mahasiswa',function (){
//     $nama='Taylor Otwell';
//     $nim='2022180001';
//     $total_nilai=100;
//     return view('akademik.nilai_mahasiswa',compact('nama','nim','total_nilai'));
// });

// Route::get('/perulangan',function(){
//     return view('akademik.perulangan');
// });

Route::get('/perulangan', function () {
    $nama='Bill Gates';
    $nim='2022180001';
    $total_nilai=[80, 70, 20, 60, 45];
    return view('akademik.perulangan', compact('nama', 'nim', 'total_nilai'));
});

Route::get('/mahasiswa', function () {
    $arrMhs=['Bill Gates', 'Indah', 'Elon Musk', 'Mark Zuckerberg', 'Linus'];
    return view('akademik.mahasiswa', ['mhs' => $arrMhs]);
});

Route::get('/dosen', function () {
    $arrDosen=['Ronal Hadi', 'Deni S', 'Fazrol R', 'Deddy P', 'Ervan A', 'Cipto P'];
    return view('akademik.dosen', ['dosen' => $arrDosen]);
});

// Route::get('/pnp/jurusan/ti/prodi', function () {
//     return view('akademik.prodi');
// }) ->name('prodi');

Route::get('/pnp/{jurusan}/{prodi}', function ($jurusan, $prodi) {
    $data=[$jurusan, $prodi];
    return view('akademik.prodi')->with('data', $data);
}) ->name('prodi');


