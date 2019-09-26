<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriArtikel;

class kategoriArtikelController extends Controller
{
    function index (){
    	$kategoriArtikel=kategoriArtikel::all();
    	return view('kategori_artikel.index',compact('kategoriArtikel'));
    }
}
