@extends('base')  

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/PL.png">
    <title>
      ePerolehan
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />

    <style>
      .previous {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
        background-color: #f1f1f1;
        color: black;
      }

      .round {
        border-radius: 50%;
      }

    </style>
  </head>
  


<body class="features-sections">
    </div>
    <!-- Else bootstrap marketplace -->
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
          </div>
              <form  method="POST" action="/dokumentambahan" enctype="multipart/form-data"> 
                @csrf
                {{-- @method('PUT') --}}
                <br>
                <fieldset>
                  <legend>Dokumen yang perlu dilampirkan:</legend>
                  <br><br>
       
                  <div class="col-md-6 ps-md-2">
                    <label>Sijil Perakuan Pendaftaran Kontraktor</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="file" name="sijil_perakuan" required>
                    </div>
                  </div>
                
                  <div class="col-md-6 ps-md-2">
                    <label>Sijil Gred CIDB</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="file" name="sijil_gred" required>
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Kod Bidang</label>
                    <div class="input-group mb-2">
                      <select class="form-control" name="id_bidangkod" required>
                        <option hidden>Sila Pilih</option>
                        @foreach($kod as  $kod)
                        {{-- <optgroup label="{{$kod->kategori_kod}}"></optgroup> --}}
                           <option value="{{$kod->id}}">{{$kod->pengkhususan_kod}}-{{$kod->deskripsi_kod}}</option>
                          @endforeach 
                        
                      </select>
                    </div>

                    <div class="col-md-6 ps-md-2">
                      <label>Tarikh Sah Laku Sijil</label>
                      <div class="input-group mb-2">
                        <input class="form-control" type="date" name="tarikh_sah" required>
                      </div>
                    </div>
                  
                  <fieldset>

                  <div class="col-md-6 ps-md-2">
                    <label>Sijil dari pihak Kementerian Kewangan Malaysia</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="file" name="sijil_mof" >
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Sijil Perbendaharaan Malaysia Sabah</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="file" name="sijil_perbendaharaan" >
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Sijil Bumiputera</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="file" name="sijil_bumiputera" >
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Sijil Taraf Bumi</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="file" name="sijil_taraf" >
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Tarikh Sah Laku</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="date" name="tarikh_sah" >
                    </div>
                  </div>

                  {{-- <div class="col-md-6 ps-md-2">
                    <label>Kod Bidang</label>
                    <div class="input-group mb-2">
                      <select class="form-control" name="id_bidangkod">
                        <option hidden>Sila Pilih</option>
                        @foreach($kod as  $kod)
                        <optgroup label="{{$kod->kategori_kod}}">
                           <option value="{{$kod->id}}">{{$kod->pengkhususan_kod}}-{{$kod->deskripsi_kod}}</option>
                          @endforeach 
                        </select> --}}


                </fieldset>
                <br><br><br>
                
                  <br><br>
                  {{-- <button type="submit" class="btn btn-primary" style="margin:5px; float:">Hantar</button>  
                  <button type="reset"  class="btn btn-primary"  style="margin:5px; float:right">Hapus</button> --}}
                  <button class="btn btn-primary" type="submit" title="Send">Hantar</button> 
                </form>
            

            </div>
          </div>
         
        </div>
      
@stop


