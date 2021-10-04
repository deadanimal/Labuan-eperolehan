<?php

namespace App\Http\Controllers;
 
use App\Models\Pembekal;
use App\Models\Dokumen;
use App\Models\Cidb;
use App\Models\Kod;

use Illuminate\Http\Request;
use Session;

class PembekalController extends Controller
{
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
        
        $sijil_ssm=$request->file('sijil_ssm')->store('sijil_ssm');
        $lesen_perniagaan=$request->file('lesen_perniagaan')->store('lesen_perniagaan');

        //$pembekal->jenis_akaun=$request->jenis_akaun;
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
        //$pembekal->bandar=$request->bandar;
        $pembekal->no_tel=$request->no_tel;
        $pembekal->no_pejabat=$request->no_pejabat;
        $pembekal->no_faks=$request->no_faks;
        $pembekal->nama_bank=$request->nama_bank;
        $pembekal->no_akaun=$request->no_akaun;

        $pembekal->jenis_akaun = implode("|" ,$request->jenis_akaun);

        $pembekal->sijil_ssm=$sijil_ssm;
        $pembekal->lesen_perniagaan=$lesen_perniagaan;
        // session(['id_pembekal' => '$pembekal->id']);
        // Session::put('id_pembekal', '$pembekal->id');

        // $temp = Session::put('id_pembekal');
        // $pembekal->id_pembekal=$temp;
        // dd());
  
        $pembekal->save();

      //dd($request->jenis_akaun);     

        if ($request->jenis_akaun=='Kerja'){
            //dd($request->jenis_akaun);     
            return redirect('/cidb/create');

        }
        else if($request->jenis_akaun=='Bekalan&Perkhidmatan(MOF)'){
            dd($request->jenis_akaun);     
            
            return redirect('/dokumen/create');

        }
        else if($request->jenis_akaun='Bekalan&Perkhidmatan(MOF)'&&'Kerja'){
         
           // $pembekal->jenis_akaun = implode("," ,$request->jenis_akaun);
            //dd($pembekal->jenis_akaun);
            return redirect ('/insertfile');
        }
        
        else{
            return redirect('/pembekal');
        }

    }


    public function show(Pembekal $pembekal)
    {
        //
    }


    public function edit(Pembekal $pembekal,$id, Kod $kod)
    {
        $pembekal= Pembekal::find($id);
        $kod = Kod::all();
        return view('pembekal.edit', [
            'pembekal'=>$pembekal, 'kod'=>$kod]);
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
        //$pembekal->bandar=$request->bandar;
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

    public function insertfile(){
       // dd('test');

        $pembekal = Pembekal::all();
        $kod = Kod::all();
        $cidb = Cidb::all();
        $dokumen = Dokumen::all();

        return view('pembekal.fileupload', [
            'pembekal' => $pembekal, 
            'dokumen' => $dokumen, 
            'cidb'=>$cidb, 
            'kod'=>$kod
        ]);

    }

    public function dokumentambahan(Request $request)
    {
    
        $cidb = new Cidb();

        $sijil_perakuan=$request->file('sijil_perakuan')->store('sijil_perakuan');
        $sijil_gred=$request->file('sijil_gred')->store('sijil_gred');

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

        $cidb->sijil_perakuan=$sijil_perakuan;
        $cidb->sijil_gred=$sijil_gred;
        $cidb->tarikh_sah=$request->tarikh_sah;
        $cidb->id_bidangkod=$request->id_bidangkod;
        
       
        $temp = Session::get('id_pembekal');
        $cidb->id_pembekal=$temp;
        $dokumen->id_pembekal=$temp;

        $cidb->save();
        $dokumen->save();

        // session(['id_pembekal' => '$pembekal->id']);
        // Session::put('id_pembekal', '$pembekal->id');
    
        return redirect('/pembekal');

    }
}
