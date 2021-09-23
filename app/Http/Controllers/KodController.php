<?php

namespace App\Http\Controllers;

use App\Models\Kod;
use Illuminate\Http\Request;

class KodController extends Controller
{

    public function index()
    {
        $kod = Kod::all();
        return view('kod.index', [
            'kod' => $kod]);
    }


    public function create()
    {
        return view('kod.create');
    }


    public function store(Request $request)
    {
        $kod = new Kod();
        
        $kod->jenis_kod=$request->jenis_kod;
        $kod->kategori_kod=$request->kategori_kod;
        $kod->pengkhususan_kod=$request->pengkhususan_kod;
        $kod->deskripsi_kod=$request->deskripsi_kod;
    
        $kod->save();
        return redirect('/kod');
    }


    public function show(Kod $kod)
    {
        //
    }


    public function edit(Kod $kod)
    {
        return view ('kod.edit',[
            'kod'=>$kod]); 

    }


    public function update(Request $request, Kod $kod)
    {
        $kod->jenis_kod=$request->jenis_kod;
        $kod->kategori_kod=$request->kategori_kod;
        $kod->pengkhususan_kod=$request->pengkhususan_kod;
        $kod->deskripsi_kod=$request->deskripsi_kod;

        $kod->save();

        $url = '/kod/'.$kod->id;
        return redirect('/kod');
    }


    public function destroy(Kod $kod)
    {
        //
    }
}
