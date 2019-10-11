<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index()
    {
    	$KategoriBerita = \App\KategoriBerita::all();

    	return view('kategori_berita.index',compact('KategoriBerita'));    
    }
    
    public function show($id)
    {
    	$KategoriBerita = \App\KategoriBerita::find($id);

    	return view('kategori_berita.show',compact('KategoriBerita'));    
    }

    public function create(){
    	return view('kategori_berita.create');
    }
    public function store(Request $request){
    	$input=$request->all();
    	KategoriBerita::create($input);
    	return redirect(route('kategori_berita.index'));
    }
     public function edit($id){
        $KategoriBerita = \App\KategoriBerita::find($id);
        
        return view('kategori_berita.edit',compact('KategoriBerita'));
    }
    public function update($id, Request $request){
        $KategoriBerita = \App\KategoriBerita::find($id);
        $input=$request->all();

        $KategoriBerita->update($input);
        
        return redirect(route('kategori_berita.index'));
    }
    public function destroy($id){
        $KategoriBerita = \App\KategoriBerita::find($id); 
    
        $KategoriBerita->delete();
        
        return redirect(route('kategori_berita.index'));
    }
}
