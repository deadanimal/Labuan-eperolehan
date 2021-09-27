<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kod;
use App\Models\Pembekal;
use Illuminate\Http\Request;
use Session;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dokumen = Dokumen::all();
        // return view('dokumen.index', [
        //     'dokumen' => $dokumen
        // ]);
    }

    public function create()
    {
        Session::set('id_pembekal',$pembekal->id);
        Session::get($id_pembekal);
        dd($id_pembekal);

        $dokumen = Dokumen::all();
        $kod = Kod::all();
        return view('dokumen.create', [
            'dokumen' => $dokumen,'kod'=>$kod
        ]);
        
    }

    public function store(Request $request)
    {
        //$id_pembekal = Session::put('id_pembekal');

        $dokumen = new Dokumen();

        $sijil_mof=$request->file('sijil_mof')->store('sijil_mof');
        $sijil_perbendaharaan=$request->file('sijil_perbendaharaan')->store('sijil_perbendaharaan');
        $sijil_bumiputera=$request->file('sijil_bumiputera')->store('sijil_bumiputera');
        $sijil_taraf=$request->file('sijil_taraf')->store('sijil_taraf');


        $dokumen->sijil_mof=$sijil_mof;
        $dokumen->sijil_perbendaharaan=$sijil_perbendaharaan;
        $dokumen->sijil_bumiputera=$sijil_bumiputera;
        $dokumen->sijil_taraf=$sijil_taraf;

        $dokumen->tarikh_sah=$request->tarikh_sah;
        $dokumen->rangkaian_perniagaan=$request->rangkaian_perniagaan;
        $dokumen->no_pendaftaran_cbp=$request->no_pendaftaran_cbp;
        $dokumen->tarikh_kuatkuasa=$request->tarikh_kuatkuasa;
        $dokumen->tarikh_tamat=$request->tarikh_tamat;
        $dokumen->salinan_kelulusan=$request->salinan_kelulusan;
        $dokumen->id_bidangkod=$request->id_bidangkod;

        $dokumen->id_pembekal=$request->id_pembekal;      
        //dd($request->dokumen_sokongan);

        // foreach ($request->dokumen_sokongan as $dokumen) {
        //     //TODO
        //     // get dokumen name (getFileName)
        //     // $path = $dokumen->store('');
        //     // $dokumen -> path = $path;
        //     // $dokumen -> save();
        // }

        //$dokumen = implode(',' $request->file('dokumen_sokongan')->store('dokumen_dokumen');

        //$dokumen->'dokumen_sokongan' = $dokumen;


        $dokumen->save();
        return redirect('/pembekal');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokumen $dokumen)
    {
        //
    }


    public function update(Request $request, Dokumen $dokumen)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokumen $dokumen)
    {
        //
    }
}
