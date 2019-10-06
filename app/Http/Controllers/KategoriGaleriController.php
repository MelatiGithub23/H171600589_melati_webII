<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_galeri;

class KategoriGaleriController extends Controller
{
	function index (){
    	$kategori_galeri=kategori_galeri::all();
    	return view('kategori_galeri.index',compact('kategori_galeri'));
    //
    	}
 public function create()
 {
        return view('kategori_galeri.create');
  }

 public function store(Request $request)
    {
        $input = $request->all();
        kategori_galeri::create($input);
        return redirect(route('kategori_galeri.index'));
    }
    public function show($id)
    {
        $kategori_galeri = kategori_galeri::find($id);
        return view('kategori_galeri.show', compact('kategori_galeri'));
  
 }
} 
