<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
	{
        $nilaikuliah = DB::table('nilaikuliah')->get();
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

	}

	public function tambah()
	{
		return view('tambahnilai');
	}

    public function store(Request $request)
	{
		DB::table('nilaikuliah')->insert([
            'id' => $request->id,
			'nrp' => $request->nrp,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		return redirect('/nilaikuliah');

	}
}
