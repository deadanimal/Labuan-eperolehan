<?php

namespace App\Http\Controllers;

use App\Models\Pembekal;
use Illuminate\Http\Request;

class PembekalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembekal = Pembekal::all();
        return view('pembekal.index', [
            'pembekal' => $pembekal
        ]);
    }


    public function create()
    {
        return view('pembekal.create');
        
        
    }

    public function store(Request $request)
    {
        $pembekal = new Pembekal();
        $pembekal->jenis_akaun=$request->jenis_akaun;
        $pembekal->no_pendaftaran=$request->no_pendaftaran;
        $pembekal->nama_pemilik=$request->nama_pemilik;
        $pembekal->kewarganegaraan=$request->kewarganegaraan;
        $pembekal->jenis_pengenalan=$request->jenis_pengenalan;
        $pembekal->kad_pengenalan=$request->kad_pengenalan;
        $pembekal->nama_perniagaan=$request->nama_perniagaan;
        $pembekal->lokasi=$request->lokasi;
        $pembekal->email=$request->email;
        $pembekal->tarikh_penubuhan=$request->tarikh_penubuhan;
        $pembekal->no_cukai=$request->no_cukai;
        $pembekal->alamat=$request->alamat;
        $pembekal->poskod=$request->poskod;
        $pembekal->negeri=$request->negeri;
        $pembekal->negara=$request->negara;
        $pembekal->daerah=$request->daerah;
        $pembekal->bandar=$request->bandar;
        $pembekal->no_tel=$request->no_tel;
        $pembekal->no_pejabat=$request->no_pejabat;
        $pembekal->no_faks=$request->no_faks;
        $pembekal->nama_bank=$request->nama_bank;
        $pembekal->no_akaun=$request->no_akaun;

        $pembekal->no_cbp=$request->no_cbp;

        $pembekal->save();

        if($request->jenis_akaun=='Kerja'){
            return redirect('/cidb/create');
        }
        else if($request->jenis_akaun=='Pembekal'){
            return redirect('/dokumen/create');
        }

    

        //dd($request->dokumen_sokongan);

        // foreach ($request->dokumen_sokongan as $dokumen) {
        //     //TODO
        //     // get dokumen name (getFileName)
        //     // $path = $dokumen->store('dokumen_pembekal');
        //     // $pembekal -> path = $path;
        //     // $pembekal -> save();
        // }

        //$dokumen = implode(',' $request->file('dokumen_sokongan')->store('dokumen_pembekal');

        //$pembekal->'dokumen_sokongan' = $dokumen;


      
         return redirect('/pembekal');
    }


    public function show(Pembekal $pembekal)
    {
        //
    }


    public function edit(Pembekal $pembekal)
    {
        $pembekal= Pembekal::all();
        return view('pembekal.edit', [
            'pembekal'=>$pembekal]);
    }

    public function update(Request $request, Pembekal $pembekal)
    {
        $pembekal->no_pendaftaran=$request->no_pendaftaran;
        $pembekal->nama_pemilik=$request->nama_pemilik;
        $pembekal->kewarganegaraan=$request->kewarganegaraan;
        $pembekal->jenis_pengenalan=$request->jenis_pengenalan;
        $pembekal->kad_pengenalan=$request->kad_pengenalan;
        $pembekal->nama_perniagaan=$request->nama_perniagaan;
        $pembekal->lokasi=$request->lokasi;
        $pembekal->email=$request->email;
        $pembekal->tarikh_penubuhan=$request->tarikh_penubuhan;
        $pembekal->no_cukai=$request->no_cukai;
        $pembekal->alamat=$request->alamat;
        $pembekal->poskod=$request->poskod;
        $pembekal->negeri=$request->negeri;
        $pembekal->negara=$request->negara;
        $pembekal->daerah=$request->daerah;
        $pembekal->bandar=$request->bandar;
        $pembekal->no_tel=$request->no_tel;
        $pembekal->no_pejabat=$request->no_pejabat;
        $pembekal->no_faks=$request->no_faks;
        $pembekal->nama_bank=$request->nama_bank;
        $pembekal->no_akaun=$request->no_akaun;
        $pembekal->id_dokumen=$request->id_dokumen;

        $pembekal->save();
        return redirect('/pembekal');
    }


    public function destroy(Pembekal $pembekal)
    {
        //
    }
}
