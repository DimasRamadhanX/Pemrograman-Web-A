<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LipstickDB extends Controller
{
    public function index()
    {
    	$lipstick = DB::table('lipstick')->paginate(15);
    	return view('lip/index',['lipstick' => $lipstick]);

    }
    public function hapus($kode)
    {

	    DB::table('lipstick')->where('kodelipstick',$kode)->delete();


	    return redirect('/lipstick');
    }

    public function edit($kode)
    {
	    $lipstick = DB::table('lipstick')->where('kodelipstick',$kode)->get();

	    return view('lip/edit',['lipstick' => $lipstick]);

    }

    public function update(Request $request)
    {
        // Update the data in the 'lipstick' table
        DB::table('lipstick')->where('kodelipstick', $request->kodelipstick)->update([
            'merklipstick' => $request->merklipstick,
            'stocklipstick' => $request->stocklipstick,
            'tersedia' => $request->tersedia
        ]);

        // Redirect back to the lipstick page
        return redirect('/lipstick');
    }

    public function detail($kode)
    {
	    $lipstick = DB::table('lipstick')->where('kodelipstick',$kode)->get();

	    return view('lip/detail',['lipstick' => $lipstick]);

    }
    public function tambah(){

        return view('lip/tambah');

    }

    public function store(Request $request)
    {

        DB::table('lipstick')->insert([
            'merklipstick' => $request->merklipstick,
            'stocklipstick' => $request->stocklipstick,
            'tersedia' => $request->tersedia

        ]);


        return redirect('/lipstick');
    }
    public function cari(Request $request)
	{


		$lipstick = DB::table('lipstick')
		->where('merklipstick',$request->cari) //nama dummy data hampir data semua, saya buang likenya

		->paginate();

    	return view('lip/index',['lipstick' => $lipstick]);

	}





}
