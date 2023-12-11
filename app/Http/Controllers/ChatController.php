<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
        $chat = DB::table('chat')->get();
    	// mengirim data pegawai ke view index
		return view('indexchat',['chat' => $chat]);

	}
    public function tambah()
	{
		return view('tambahchat');
	}

    public function store(Request $request)
	{
		DB::table('chat')->insert([
            'id' => $request->id,
			'pesan' => $request->pesan
		]);
		return redirect('/chat');

	}

    public function showImages()
    {
        $images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'];

        return view('index', ['images' => $images]);
    }

}
