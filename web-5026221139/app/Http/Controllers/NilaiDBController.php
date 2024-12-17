<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiDBController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->paginate(15);

        // Menambahkan perhitungan custom NilaiHuruf dan Bobot
        $nilaikuliah->getCollection()->transform(function ($item) {
            // Menentukan NilaiHuruf berdasarkan NilaiAngka
            if ($item->NilaiAngka < 20) {
                $item->NilaiHuruf = 'D';
            } elseif ($item->NilaiAngka >= 41 && $item->NilaiAngka <= 60) {
                $item->NilaiHuruf = 'C';
            } elseif ($item->NilaiAngka >= 61 && $item->NilaiAngka <= 80) {
                $item->NilaiHuruf = 'B';
            } elseif ($item->NilaiAngka > 80) {
                $item->NilaiHuruf = 'A';
            } else {
                $item->NilaiHuruf = 'E';
            }
            // Menghitung Bobot (NilaiAngka * SKS)
            $item->Bobot = $item->NilaiAngka * $item->SKS;

            return $item;
        });

        // Mengembalikan data ke view
        return view('easblade/index', [
            'nilaikuliah' => $nilaikuliah
        ]);

    }
    public function tambah(){

        return view('easblade/tambah');

    }

    public function store(Request $request)
    {

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS

        ]);


        return redirect('/nilaikuliah');
    }

}
