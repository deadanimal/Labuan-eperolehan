<?php

namespace App\Http\Controllers;

use App\Models\Cidb;
use App\Models\Kod;
use App\Models\Pembekal;
use Illuminate\Http\Request;


class CidbController extends Controller
{

    public function index()
    {
        //
    }

    public function create($id)
    {
        $cidb = Cidb::find($id);
        $pembekal=Pembekal::where('id', $cidb->id_pembekal)->get();

        $kod = Kod::all();

        return view('cidb.create', [
            'cidb' => $cidb,'kod'=>$kod,'pembekal'=>$pembekal
        ]);
    }

    public function store(Request $request)
    {
        $cidb = new Cidb();

        $sijil_perakuan=$request->file('sijil_perakuan')->store('sijil_perakuan');
        $sijil_gred=$request->file('sijil_gred')->store('sijil_gred');
        $cidb->sijil_perakuan=$sijil_perakuan;
        $cidb->sijil_gred=$sijil_gred;

  
        $cidb->tarikh_sah=$request->tarikh_sah;
        $cidb->id_bidangkod=$request->id_bidangkod;
        $cidb->id_pembekal=$request->id_pembekal;

        $cidb->save();
        return redirect('/pembekal');

    }

    public function show(Cidb $cidb, $id)
    {
        //
    }

    public function edit(Cidb $cidb)
    {
        //
    }


    public function update(Request $request, Cidb $cidb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidb  $cidb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidb $cidb)
    {
        //
    }
}
