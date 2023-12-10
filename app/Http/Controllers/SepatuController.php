<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepatuController extends Controller
{
	public function index()
	{
        $sepatu = DB::table('sepatu')->get();
		return view('indexSepatu',['sepatu' => $sepatu]);

	}

	public function tambah()
	{
		// memanggil view tambah
		return view('tambahSepatu');
	}

	// method untuk insert data ke table
	public function store(Request $request)
	{
		// insert data ke table
		DB::table('sepatu')->insert([
			'kodesepatu' => $request->kodesepatu,
			'merksepatu' => $request->merksepatu,
			'stocksepatu' => $request->stocksepatu,
			'tersedia' => $request->tersedia = ($request->stocksepatu != 0) ? 'Y':'N',
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();
		// passing data sepatu yang didapat ke view edit.blade.php
		return view('editSepatu',['sepatu' => $sepatu]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data
		DB::table('sepatu')->where('kodesepatu',$request->kodesepatu)->update([
			'kodesepatu' => $request->kodesepatu,
			'merksepatu' => $request->merksepatu,
			'stocksepatu' => $request->stocksepatu,
			'tersedia' => $request->tersedia = ($request->stocksepatu != 0) ? 'Y':'N',
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepatu')->where('kodesepatu',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}

    public function lihat($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();

		return view('viewSepatu',['sepatu' => $sepatu]);

	}

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$sepatu = DB::table('sepatu')
		->where('merksepatu','like',"%".$cari."%")
		->paginate();
		return view('indexsepatu',['sepatu' => $sepatu, 'cari' => $cari]);
	}

}
