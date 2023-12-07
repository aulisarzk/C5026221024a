<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller

{
    public function index(){
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
		return view('indexkeranjang',['keranjangbelanja' => $keranjangbelanja]);

	}

	public function beli()
	{
		return view('beli');

	}

	public function store(Request $request)
	{
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->id,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		return redirect('/keranjangbelanja');

	}

	public function hapus($id)
	{
		DB::table('keranjangbelanja')->where('ID',$id)->delete();
		return redirect('/keranjangbelanja');
	}


}
