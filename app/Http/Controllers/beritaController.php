<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_berita;
use App\berita;
class beritaController extends Controller
{
	function index (){
    	$berita=berita::all();
    	return view('berita.index',compact('berita'));
}
 public function create()
 {
 	$kategori_berita = kategori_berita::pluck('nama', 'id');
        return view('berita.create')->with('kategori_berita', $kategori_berita);
  }

 public function store(Request $request)
    {
        $input = $request->all();
        berita::create($input);
        return redirect(route('berita.index'));
    }
    public function show($id)
    {
        $berita = berita::find($id);
        return view('berita.show', compact('berita'));
    }  //
}