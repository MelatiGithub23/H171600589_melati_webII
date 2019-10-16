<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_berita;

class kategoriBeritaController extends Controller
{
    function index (){
    	$kategori_berita=kategori_berita::all();
    	return view('kategori_berita.index',compact('kategori_berita'));

    	}
 public function create()
 {
        return view('kategori_berita.create');
  }

 public function store(Request $request)
    {
        $input = $request->all();
        kategori_berita::create($input);
        return redirect(route('kategori_berita.index'));
    }
    public function show($id)
    {
        $kategori_berita = kategori_berita::find($id);
        return view('kategori_berita.show', compact('kategori_berita'));
    
   }
   public function edit($id)
{
    $kategori_berita=kategori_berita::find($id);

    return view('kategori_berita.edit', compact('kategori_berita', 'kategori_berita'));

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
    kategori_berita::find($id)->update($edit);

    return redirect(route('kategori_berita.index'));
  }

  public function destroy($id)
  {

    kategori_berita::destroy($id);

    return redirect(route('kategori_berita.index'));
  }
}
