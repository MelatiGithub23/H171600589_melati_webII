<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori_artikel;


class artikelcontroller extends Controller
{
    public function index (){
    	$artikel=artikel::all();
    	return view('artikel.index',compact('artikel'));
 
    	}

    public function create()
    {
 	    $kategori_artikel = kategori_artikel::pluck('nama', 'id');
        return view('artikel.create')->with('kategori_artikel', $kategori_artikel);
    }

 public function store(Request $request)
    {
        $input = $request->all();
        artikel::create($input);
        return redirect(route('artikel.index'));
    }
    public function show($id)
    {
        $artikel = artikel::find($id);
        return view('artikel.show', compact('artikel'));
    }

public function edit($id)
{
    $artikel=artikel::find($id);

    $kategori_artikel = kategori_artikel::pluck('nama', 'id');

    return view('artikel.edit', compact('artikel', 'kategori_artikel'));

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
    $asdf = artikel::find($id)->update($edit);

    return redirect(route('artikel.index'));
  }
  public function destroy($id)
  {

    artikel::destroy($id);

    return redirect(route('artikel.index'));
  }
}