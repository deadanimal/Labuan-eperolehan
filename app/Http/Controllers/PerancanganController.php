<?php

namespace App\Http\Controllers;

use App\Models\Perancangan;
use Illuminate\Http\Request;
use \PDF;

class PerancanganController extends Controller
{

    public function index()
    {
    
        $perancangan = Perancangan::all();
        return view('perancangan.index', [
            'perancangan' => $perancangan
        ]);

    }

    public function create()
    {
        return view('perancangan.create');
    }

    public function store(Request $request)
    {
        $perancangan = new Perancangan();

        $perancangan->tahun_pelan=$request->tahun_pelan;
        $perancangan->tajuk=$request->tajuk;
        $perancangan->perihal=$request->perihal;
        $perancangan->kategori=$request->kategori;
        $perancangan->kaedah=$request->kaedah;
        $perancangan->tarikh=$request->tarikh;
        $perancangan->amaun=$request->amaun;
        $perancangan->pengesah=$request->pengesah;
        $perancangan->pelulus=$request->pelulus;

        //$perancangan->status="Menunggu pengesahan";

       
        if ($request->status_pelan=="hantar"){
            $perancangan->status="Menunggu Pengesahan";
        }
        else if($request->status_pelan=="draf"){
            $perancangan->status="Draf";
            
        }

        $perancangan->save();
        $message="Pelan Perancangan Telah Berjaya Dihantar. Sila tunggu Pengawai Pengesah untuk Mengesahkan pelan yang dihantar. ";
        return redirect('/perancangan');

        

    }


    public function show(Perancangan $perancangan)
    {
        //
    }


    public function edit(Perancangan $perancangan)
    {
        return view('perancangan.edit', ['perancangan'=>$perancangan]); 
    }

    public function update(Request $request, Perancangan $perancangan)
    {
        
        $perancangan->tahun_pelan=$request->tahun_pelan;
        $perancangan->tajuk=$request->tajuk;
        $perancangan->perihal=$request->perihal;
        $perancangan->kategori=$request->kategori;
        $perancangan->kaedah=$request->kaedah;
        $perancangan->tarikh=$request->tarikh;
        $perancangan->amaun=$request->amaun;
        $perancangan->pengesah=$request->pengesah;
        $perancangan->pelulus=$request->pelulus;
        $perancangan->catatan_pengesah=$request->catatan_pengesah;
        $perancangan->catatan_pelulus=$request->catatan_pelulus;
        $perancangan->status="Menunggu pengesahan";

        $perancangan->save();
        return redirect('/perancangan');

    }

    public function indexpengesah()
    {
        $perancangan = Perancangan::where('status','Menunggu Pengesahan')->get();
        return view('perancangan.indexpengesah', [
            'perancangan' => $perancangan
        ]);


    }

    public function editpengesah(Perancangan $perancangan, $id)
    {
        $perancangan = Perancangan::where('id',$id)->first();

        return view('perancangan.pengesah', ['perancangan'=>$perancangan]); 
    }


    public function updatepengesah(Request $request, Perancangan $perancangan)
    {
        $perancangan = Perancangan::where('id',$request->perancangan_id)->first();


        $perancangan->tahun_pelan=$request->tahun_pelan;
        $perancangan->tajuk=$request->tajuk;
        $perancangan->perihal=$request->perihal;
        $perancangan->kategori=$request->kategori;
        $perancangan->kaedah=$request->kaedah;
        $perancangan->tarikh=$request->tarikh;
        $perancangan->amaun=$request->amaun;
        $perancangan->pengesah=$request->pengesah;
        $perancangan->pelulus=$request->pelulus;
        $perancangan->catatan_pengesah=$request->catatan_pengesah;;
        $perancangan->status=$request->status;
        // $perancangan->id=$request->perancangan_id;

        $perancangan->save();
        // dd($perancangan->status);

        return redirect('/indexpengesah');

    }

    public function indexpelulus()
    {
    
        $perancangan = Perancangan::where('status','Menunggu Kelulusan')->get();
        return view('perancangan.indexpelulus', [
            'perancangan' => $perancangan
        ]);

    }


    public function editpelulus(Perancangan $perancangan,$id)
    {
        $perancangan = Perancangan::where('id',$id)->first();
        return view('perancangan.pelulus', ['perancangan'=>$perancangan]); 
        
    }


    public function updatepelulus(Request $request, Perancangan $perancangan)
    { 
        //dd($request);
        $perancangan = Perancangan::where('id',$request->perancangan_id)->first();

        $perancangan->tahun_pelan=$request->tahun_pelan;
        $perancangan->tajuk=$request->tajuk;
        $perancangan->perihal=$request->perihal;
        $perancangan->kategori=$request->kategori;
        $perancangan->kaedah=$request->kaedah;
        $perancangan->tarikh=$request->tarikh;
        $perancangan->amaun=$request->amaun;
        $perancangan->pengesah=$request->pengesah;
        $perancangan->pelulus=$request->pelulus;
        $perancangan->catatan_pengesah=$request->catatan_pengesah;;
        $perancangan->status=$request->status;
        // $perancangan->id=$request->perancangan_id;
        
       
        $perancangan->save();
        return redirect('/indexpelulus');

    }

    public function cetakpelan($id)
    {
        // dd($id);
        $perancangan= Perancangan::find($id);
        $perancangan->status = "Diluluskan";
        $perancangan->save();


        $pdf = PDF::loadView('pdf.cetakpelan', [
            'perancangan' => $perancangan]);
            return $pdf->download($perancangan->tajuk.'.pdf');
    }


    public function destroy(Perancangan $perancangan)
    {
        //
    }
}
