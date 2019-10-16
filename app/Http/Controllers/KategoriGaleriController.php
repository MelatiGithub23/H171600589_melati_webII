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
 public function edit($id)
{
    $kategori_galeri=kategori_galeri::find($id);

    return view('kategori_galeri.edit', compact('kategori_galeri', 'kategori_galeri'));

/*
    if (empty($artikel))
    {
        return redirect (route('artikel.index'));
    }*/
    //return view('artikel.edit', compact('artikel', 'kategori_artikel'));
    
} 
  public function update(Request $request, $id)
  {
    $edit = $request->except('_method', '_token');
    kategori_galeri::find($id)->update($edit);

    return redirect(route('kategori_galeri.index'));
  }

  public function destroy($id)
  {

    kategori_galeri::destroy($id);

    return redirect(route('kategori_galeri.index'));
  }
}
