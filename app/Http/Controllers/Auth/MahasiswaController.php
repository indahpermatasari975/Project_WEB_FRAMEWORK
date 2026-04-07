<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        return "Ini adalah method index di MahasiswaController";
    }

    public function insertSql(){
        $query=DB::insert("INSERT INTO students (nim, nama_lengkap, tempat_lahir, tgl_lahir, email,
        prodi, alamat, created_at, updated_at)
        VALUES ('2401091009', 'Indah Permata Sari', 'Solok', '2006-01-24', 'indah@example.com', 'Teknik Informatika',
         'Jl. Merdeka No. 1', now(), now())");
    }
}
