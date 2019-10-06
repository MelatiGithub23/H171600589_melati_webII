<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\kategori_galeri;
class galeriController extends Controller
{
	function index (){
    	$galeri=galeri::all();
    	return view('galeri.index',compact('galeri'));
    //
    	}
 public function create()
 {
 	$kategori_galeri = kategori_galeri::pluck('nama', 'id');
        return view('galeri.create')->with('kategori_galeri', $kategori_galeri);
  }

 public function store(Request $request)
    {
        $input = $request->all();
        galeri::create($input);
        return redirect(route('galeri.index'));
    }
    public function show($id)
    {
        $galeri = galeri::find($id);
        return view('galeri.show', compact('galeri'));
    
 }
}
