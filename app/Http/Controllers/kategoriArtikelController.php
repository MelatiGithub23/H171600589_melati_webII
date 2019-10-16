<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;

class kategoriArtikelController extends Controller
{
    function index (){
    	$kategori_artikel=kategori_artikel::all();
    	return view('kategori_artikel.index',compact('kategori_artikel'));

    	}
 public function create()
 {
        return view('kategori_artikel.create');
  }

 public function store(Request $request)
    {
        $input = $request->all();
        kategori_artikel::create($input);
        return redirect(route('kategori_artikel.index'));
    }
    public function show($id)
    {
        $kategori_artikel = kategori_artikel::find($id);
        return view('kategori_artikel.show', compact('kategori_artikel'));
    

   }
   public function edit($id)
{
    $kategori_artikel=kategori_artikel::find($id);

    return view('kategori_artikel.edit', compact('kategori_artikel', 'kategori_artikel'));

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
    kategori_artikel::find($id)->update($edit);

    return redirect(route('kategori_artikel.index'));
  }

  public function destroy($id)
  {

    kategori_artikel::destroy($id);

    return redirect(route('kategori_artikel.index'));
  }
}
