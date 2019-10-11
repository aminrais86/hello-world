<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index()
    {
    	$KategoriPengumuman = \App\KategoriPengumuman::all();

    	return view('kategori_pengumuman.index',compact('KategoriPengumuman'));    
    }
    
    public function show($id)
    {
    	$KategoriPengumuman = \App\KategoriPengumuman::find($id);

    	return view('kategori_pengumuman.show',compact('KategoriPengumuman'));    
    }

    public function create(){
    	return view('kategori_pengumuman.create');
    }
    public function store(Request $request){
    	$input=$request->all();
    	KategoriPengumuman::create($input);
    	return redirect(route('kategori_pengumuman.index'));
    }
     public function edit($id){
        $KategoriPengumuman = \App\KategoriPengumuman::find($id);
        
        return view('kategori_pengumuman.edit',compact('KategoriPengumuman'));
    }
    public function update($id, Request $request){
        $KategoriPengumuman = \App\KategoriPengumuman::find($id);
        $input=$request->all();

        $KategoriPengumuman->update($input);
        
        return redirect(route('kategori_pengumuman.index'));
    }
    public function destroy($id){
        $KategoriPengumuman = \App\KategoriPengumuman::find($id); 
    
        $KategoriPengumuman->delete();
        
        return redirect(route('kategori_pengumuman.index'));
    }
}
