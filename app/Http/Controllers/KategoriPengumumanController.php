<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_pengumuman;

class KategoriPengumumanController extends Controller
{
	function index (){
    	$kategori_pengumuman=kategori_pengumuman::all();
    	return view('kategori_pengumuman.index',compact('kategori_pengumuman'));
  
    //
    	}
 public function create()
 {
        return view('kategori_pengumuman.create');
  }

 public function store(Request $request)
    {
        $input = $request->all();
        kategori_pengumuman::create($input);
        return redirect(route('kategori_pengumuman.index'));
    }
    public function show($id)
    {
        $kategori_pengumuman = kategori_pengumuman::find($id);
        return view('kategori_pengumuman.show', compact('kategori_pengumuman'));
    
 }
 public function edit($id)
{
    $kategori_galeri=kategori_pengumuman::find($id);

    return view('kategori_pengumuman.edit', compact('kategori_pengumuman', 'kategori_pengumuman'));

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
    kategori_pengumuman::find($id)->update($edit);

    return redirect(route('kategori_pengumuman.index'));
  }

  public function destroy($id)
  {

    kategori_pengumuman::destroy($id);

    return redirect(route('kategori_pengumuman.index'));
  }
}