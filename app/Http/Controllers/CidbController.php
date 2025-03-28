<?php

namespace App\Http\Controllers;

use App\Models\Cidb;
use App\Models\Kod;
use App\Models\Pembekal;
use Illuminate\Http\Request;
use Session;

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

        $sijil_perakuan=$request->file('sijil_perakuan')->store('sijil_perakuan');
        $sijil_gred=$request->file('sijil_gred')->store('sijil_gred');

        $cidb->sijil_perakuan=$sijil_perakuan;
        $cidb->sijil_gred=$sijil_gred;

  
        $cidb->tarikh_sah=$request->tarikh_sah;
        $cidb->id_bidangkod=$request->id_bidangkod;
        
       
        $temp = Session::get('id_pembekal');
        $cidb->id_pembekal=$temp;
        //dd($temp);

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
