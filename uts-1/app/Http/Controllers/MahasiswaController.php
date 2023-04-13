<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::insert('insert into mahasiswas (npm, nama_mahasiswa, tempat_lahir, tanggal_lahir, alamat, created_at) values (?, ?, ?, ?, ?, ?)', ['2125250100', 'Ahmad', 'Palembang', '2003-12-04', 'Jl Sukabangun II', now()]);
        dump($result);
    }

    public function update()
    {
        $result = DB::update('update mahasiswas set nama_mahasiswa = "Ali", updated_at = now() where npm = ?', ['2125250100']);
        dump($result);
    }

    public function delete()
    {
        $result = DB::delete('delete from mahasiswas where npm = ?', ['2125250100']);
        dump($result);
    }

    public function select()
    {
        $kampus = "Universitas Multi Data Palembang";
        $result = DB::select('select * from mahasiswas');
        // dump($result);
        return view('mahasiswa.index', ['allmahasiswa' => $result, 'kampus' => $kampus]);
    }


    public function insertQb()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                'npm' => '2125250112',
                'nama_mahasiswa' => 'Udin',
                'tempat_lahir' => 'Afrika',
                'tanggal_lahir' => '2001-01-01',
                'alamat' => 'Jl Kematian',
                'created_at' => now()
            ]
        );
        dump($result);
    }

    public function updateQb()
    {
        $result = DB::table('mahasiswas')->where('npm', '2125250112')->update([
            'nama_mahasiswa' => 'Jarwo',
            'updated_at' => now()
        ]);
        dump($result);
    }

    public function deleteQb()
    {
        $result = DB::table('mahasiswas')
            ->where('npm', '=', '2125250112')
            ->delete();
        dump($result);
    }

    public function selectQb()
    {
        $kampus = "Universitas Multi Data Palembang";
        $result = DB::table('mahasiswas')->get();
        return view('mahasiswa.index', ['allmahasiswa' => $result, 'kampus' => $kampus]);
    }

    public function insertElq()
    {
        $mahasiswa = new Mahasiswa; //instansiasi class mahasiswa
        $mahasiswa->npm = '2125250188';
        $mahasiswa->nama_mahasiswa = 'Jainal';
        $mahasiswa->tempat_lahir = 'Dimana Ajah';
        $mahasiswa->tanggal_lahir = '2002-12-07';
        $mahasiswa->alamat = 'Jl Entah kemana';
        $mahasiswa->save(); //simpan data ke tabel mahasiwa
        dump($mahasiswa); //melihat isi $mahasiswa
    }

    public function updateElq()
    {
        $mahasiswa = Mahasiswa::where('npm', '2125250188')->first(); //cari data mahasiswas berdasarkan npm
        $mahasiswa->nama_mahasiswa  = 'Tarjo';
        $mahasiswa->save(); //menyimpan data ke table mhasiswa
        dump($mahasiswa); // melihat isi $mahasiswa
    }

    public function deleteElq()
    {
        $mahasiswa = Mahasiswa::where('npm', '2125250188')->first(); //cari data
        $mahasiswa->delete(); //menghapus data mahasiswa berdasarkan npm dipocok
        dump($mahasiswa); // melihat isi hatimu
    }

    public function selectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        //dump($mahasiswa);
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa, 'kampus' => $kampus]);
    }
}
