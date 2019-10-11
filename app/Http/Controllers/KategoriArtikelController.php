<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index()
    {
    	$KategoriArtikel = \App\KategoriArtikel::all();

    	return view('kategori_artikel.index',compact('KategoriArtikel'));    
    }
    
    public function show($id)
    {
    	$KategoriArtikel = \App\KategoriArtikel::find($id);
        
    	return view('kategori_artikel.show',compact('KategoriArtikel'));    
    }

    public function create(){
    	return view('kategori_artikel.create');
    }
    public function store(Request $request){
    	$input=$request->all();
    	KategoriArtikel::create($input);
    	return redirect(route('kategori_artikel.index'));
    }
    public function edit($id){
        $KategoriArtikel = \App\KategoriArtikel::find($id);
        
        return view('kategori_artikel.edit',compact('KategoriArtikel'));
    }
    public function update($id, Request $request){
        $KategoriArtikel = \App\KategoriArtikel::find($id);
        $input=$request->all();

        $KategoriArtikel->update($input);
        
        return redirect(route('kategori_artikel.index'));
    }
    public function destroy($id){
        $KategoriArtikel = \App\KategoriArtikel::find($id); 
    
        $KategoriArtikel->delete();
        
        return redirect(route('kategori_artikel.index'));
    }
}
