<?php

namespace App\Http\Controllers;

use App\Models\Cidb;
use App\Models\Kod;
use Illuminate\Http\Request;


class CidbController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $cidb = Cidb::all();
        $kod = Kod::all();
        return view('cidb.create', [
            'cidb' => $cidb,'kod'=>$kod
        ]);
    }

    public function store(Request $request)
    {
        $cidb = new Cidb();

        $cidb->sijil_perakuan=$request->sijil_perakuan;
        $cidb->sijil_gred=$request->sijil_gred;
        $cidb->tarikh_sah=$request->tarikh_sah;
        $cidb->id_bidangkod=$request->id_bidangkod;


        $cidb->save();
        return redirect('/pembekal/create');

    }

    public function show(Cidb $cidb)
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
