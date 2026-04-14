<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    // INSERT 1 DATA
    public function insertDosen()
    {
       DB::table('dosens')->insert([
            'nik' => '1978092800001',
            'nama' => 'Deni',
            'prodi' => 'TRPL',
            'no_telp' => '08123456789',
            'email' => 'deni@gmail.com',
            'alamat' => 'Padang'
        ]);

        return "Insert berhasil";
    }

    // INSERT BANYAK DATA
    public function insertBanyakDosen()
    {
        DB::table('dosens')->insert([
            [
                'nik' => '1978092800002',
                'nama' => 'Andi',
                'prodi' => 'MI',
                'no_telp' => '081111111',
                'email' => 'andi@gmail.com',
                'alamat' => 'Bukittinggi'
            ],
            [
                'nik' => '1978092800003',
                'nama' => 'Siti',
                'prodi' => 'SI',
                'no_telp' => '082222222',
                'email' => 'siti@gmail.com',
                'alamat' => 'Padang'
            ]
        ]);

        return "Insert banyak berhasil";
    }

    // UPDATE
    public function updateDosen()
    {
        DB::table('dosens')
            ->where('nama', 'Deni')
            ->update([
                'prodi' => 'MI',
                'no_telp' => '089999999',
                'email' => 'deni_update@gmail.com',
                'alamat' => 'Padang Baru'
            ]);

        return "Update berhasil";
    }

    // UPDATE WHERE
    public function updateWhereDosen()
    {
        DB::table('dosens')
            ->where('nama', 'Deni')
            ->where('prodi', '!=', 'TRPL')
            ->update([
                'no_telp' => '080000000'
            ]);

        return "Update where berhasil";
    }

    // UPDATE OR INSERT
    public function updateOrInsert()
    {
        DB::table('dosens')->updateOrInsert(
            ['nik' => '1978092800005'],
            [
                'nama' => 'Budi',
                'prodi' => 'TRPL',
                'no_telp' => '081212121',
                'email' => 'budi@gmail.com',
                'alamat' => 'Solok'
            ]
        );

        return "Update or Insert berhasil";
    }

    // DELETE
    public function deleteDosen()
    {
        DB::table('dosens')
            ->where('nama', 'Siti')
            ->delete();

        return "Delete berhasil";
    }

    // GET SEMUA DATA
    public function get()
    {
         $query = DB::table('dosens')->get();
         dd($query);
    }

    public function getTampil()
    {
        $query = DB::table('dosens')->get();
        echo $query[0]->id . '<br />';
        echo $query[0]->nik . '<br />';
        echo $query[0]->nama . '<br />';
        echo $query[0]->email . '<br />';
        echo $query[0]->alamat;
    }

    public function getView()
    {
        $query = DB::table('dosens')->get();
        return view('akademik.dosen', ['dosens' => $query]);
    }

    public function getWhere()
    {
        $query = DB::table('dosens')
            ->where('prodi', 'TRPL')
            ->orderBy('nama', 'desc')
            ->get();

        return view('akademik.dosen', ['dosens' => $query]);
    }

    public function selectDosen()
    {
        $query = DB::table('dosens')
            ->select('nik','nama as nama_dosen')
            ->get();
        dd($query);
    }

    public function take()
    {
        $query = DB::table('dosens')
            ->orderBy('nama', 'asc')
            ->skip(1)
            ->take(2)
            ->get();
        return view('akademik.dosen', ['dosens' => $query]);
    }

    public function first()
    {
        $query = DB::table('dosens')
            ->where('nama', 'Deni')
            ->first();

        return view('akademik.dosen', ['dosens' => $query ? collect([$query]) : collect()]);
    }

    public function index()
    {
        $query = DB::table('dosens')->get();
        return view('akademik.dosen', ['dosens' => $query]);
    }

    public function find()
    {
        $query = DB::table('dosens')
            ->find(2);
        return view('akademik.dosen', ['dosens' => $query ? collect([$query]) : collect()]);
    }

    public function raw()
    {
        $query = DB::table('dosens')
            ->selectRaw('count(*) as total_dosen')
            ->first();

        echo $query->total_dosen;
    }
}
