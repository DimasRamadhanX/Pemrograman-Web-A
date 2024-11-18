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
    public function Tugas1(){
		return view('Tugas1');
	}
    public function form()
    {
        return view('form');
    }

    public function hello()
    {
        return view('hello');
    }

    public function responsive1()
    {
        return view('responsive1');
    }

    public function style()
    {
        return view('style');
    }
    public function templateinitiate()
    {
        return view('templateinitiate');
    }


    public function style2()
    {
        return view('style2');
    }


    public function biodata(){
        $nama="dimas fr";
        $umur= 12;
        $hasil= 12;
        $pelajaran= ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view( 'biodata',['nama' => $nama, 'umur'=> $umur, 'hasil'=> $hasil, 'matkul' => $pelajaran]);
    }

}
