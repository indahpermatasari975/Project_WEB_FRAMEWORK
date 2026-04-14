<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
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

        return "Data berhasil ditambahkan (SQL)";
    }
    // 2. Insert Prepared Statement
    public function insertPrepared()
    {
        DB::insert("INSERT INTO students
        (nim, nama_lengkap, tempat_lahir, tgl_lahir, email, prodi, alamat, created_at, updated_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
        [
            '2022090908',
            'Taylor Otwel',
            'Limau Manis',
            '1971-08-12',
            'taylor@laravel.com',
            'MI',
            'Jl. M Hatta no.1 Padang',
            now(),
            now()
        ]);

        return "Data berhasil ditambahkan (Prepared)";
    }

    // 3. Insert Named Binding
    public function insertBinding()
    {
        DB::insert("INSERT INTO students
        (nim, nama_lengkap, tempat_lahir, tgl_lahir, email, prodi, alamat, created_at, updated_at)
        VALUES (:nim, :nama, :tempat, :tgl, :email, :prodi, :alamat, :created, :updated)",
        [
            'nim' => '2022090907',
            'nama' => 'Budi Santoso',
            'tempat' => 'Padang',
            'tgl' => '2000-01-01',
            'email' => 'budi@mail.com',
            'prodi' => 'SI',
            'alamat' => 'Jl. Padang',
            'created' => now(),
            'updated' => now()
        ]);

        return "Data berhasil ditambahkan (Binding)";
    }

    // 4. Update
    public function update()
    {
        DB::update("UPDATE students SET nama_lengkap=? WHERE nim=?",
        ['Nama Update', '2022090909']);

        return "Data berhasil diupdate";
    }

    // 5. Delete
    public function delete()
    {
        DB::delete("DELETE FROM students WHERE nim=?", ['2022090907']);

        return "Data berhasil dihapus";
    }

    // 6. Select
    public function select()
    {
        $data = DB::select("SELECT * FROM students");
        return dd($data);
    }

    // 7. Select tampil (loop manual)
    public function selectTampil()
    {
        $data = DB::select("SELECT * FROM students");

        foreach ($data as $mhs) {
            echo $mhs->nama_lengkap . "<br>";
        }
    }

    // 8. Select ke view
    public function selectView()
    {
        $data = DB::select("SELECT * FROM students");
        return view('akademik.mahasiswa', ['mahasiswas' => $data]);
    }

    // 9. Select where
    public function selectWhere()
    {
        $data = DB::select("SELECT * FROM students WHERE prodi=? ORDER BY nama_lengkap ASC", ['MI']);
        return dd($data);
    }

    // 10. Statement (truncate)
    public function statement()
    {
        DB::statement("TRUNCATE students");
        return "Tabel berhasil dikosongkan";
    }


}

