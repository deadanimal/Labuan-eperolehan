<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kod;
use Illuminate\Http\Request;

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
        $dokumen = Dokumen::all();
        $kod = Kod::all();
        return view('dokumen.create', [
            'dokumen' => $dokumen,'kod'=>$kod
        ]);
        
    }

    public function store(Request $request)
    {
        $dokumen = new Dokumen();


        $dokumen->sijil_mof=$request->sijil_mof;
        $dokumen->sijil_perbendaharaan=$request->sijil_perbendaharaan;
        $dokumen->sijil_bumiputera=$request->sijil_bumiputera;
        $dokumen->sijil_taraf=$request->sijil_taraf;
        $dokumen->tarikh_sah=$request->tarikh_sah;
        $dokumen->rangkaian_perniagaan=$request->rangkaian_perniagaan;
        $dokumen->no_pendaftaran_cbp=$request->no_pendaftaran_cbp;
        $dokumen->tarikh_kuatkuasa=$request->tarikh_kuatkuasa;
        $dokumen->tarikh_tamat=$request->tarikh_tamat;
        $dokumen->salinan_kelulusan=$request->salinan_kelulusan;
        $dokumen->id_bidangkod=$request->id_bidangkod;
        
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
        return redirect('/pembekal/create');
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
