<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama = "Diki Alfarabi Hadi";

    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
    }
    public function blog(){
        return view ('blog');
    }
    public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}

    public function biodata(){
        $nama="dimas fr";
        $umur= 12;
        $hasil= 12;
        $pelajaran= ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view( 'biodata',['nama' => $nama, 'umur'=> $umur, 'hasil'=> $hasil, 'matkul' => $pelajaran]);
    }

}
