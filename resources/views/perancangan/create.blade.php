@extends('base')  

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/Pl.png">
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
  </head>

<body class="features-sections">
<a href="/perancangan">Kembali</a>
<br><br>
  <h3>Cipta Pelan</h3>

      </div>
      <!-- Else bootstrap marketplace -->
      <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
        <div class="container border-bottom">
          <div class="row justify-space-between py-2">
            <div class="col-lg-3 me-auto">
            </div>
              <form class="form-inline" method="POST" action="/perancangan"> 
                @csrf
                <br>
                <fieldset>
                  <legend>Butiran Pelan</legend>
                  <br><br>
                  
                <div class="row">
                  <div class="col-md-3">
                    <label>Tahun Perancangan:</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" name="tahun_pelan">
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Tajuk Pelan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" style="width:500px;" name="tajuk">
                    </div>
                  </div>
                </div>

                <label>Perihal Pelan</label>
                <input type="text" name="perihal" class="form-control" style="width:500px;"> 

                {{-- <div class="container">
                  <div class="row justify-space-between py-2">
                    <div class="col-lg-4mx-auto">
                      <label>Tarikh Jemputan</label>
                      <input type="text" placeholder="Regular" class="form-control" >
                      <textarea class="form-control" name="tarikh_pelan"></textarea>
                    </div>
                  </div>
                </div> --}}
                  
                    <label>Kategori Pelan</label>
                    <select name="kategori" class="form-control">
                      <option hidden>Sila Pilih</option>
                      <option value="bekalan">Bekalan</option>
                      <option value="perkhidmatan">Perkhidmatan</option>
                      <option value="kerja">Kerja</option>
                    </select> 

                    <label>Kaedah Pelan</label>
                    <select name="kaedah" class="form-control">
                      <option hidden>Sila Pilih</option>
                      <option value="pembelian terus">Pembelian Terus</option>
                      <option value="sebutharga">Sebutharga</option>
                      <option value="tender">Tender</option>
                    </select>

                    <label>Tarikh Jemputan</label>
                    <input type="date" name="tarikh" class="form-control">

                    <label>Amaun Anggaran</label>
                    <input type=text name="amaun" class="form-control">

                </fieldset>
                <br><br><br>
                
                <fieldset>
                  <legend>Maklumat Pegawai</legend>
                  <br><br>

                  <label>Pegawai Pengesah</label>
                  <select class="form-control" name="pengesah">
                    <option hidden>Sila Pilih</option>
                    <option value="1">Ali Bin Raz</option>
                    <option value="2">Siti Binti Ahmad</option>
                  </select>


                  <label>Pegawai Pelulus</label>
                  <select class="form-control" name="pelulus">
                    <option hidden>Sila Pilih</option>
                    <option value="1">Ali Bin Raz</option>
                    <option value="2">Siti Binti Ahmad</option>
                  </select>

                </fieldset>

                  <br><br>
                  {{-- <button type="submit" class="btn btn-primary" style="margin:5px; float:">Hantar</button>  
                  <button type="reset"  class="btn btn-primary"  style="margin:5px; float:right">Hapus</button> --}}
                  <input type="reset" class="btn bg-gradient-light w-auto me-2" value="Reset" >
                  <button class="btn bg-gradient-info w-auto me-2" type="submit" name="status_pelan" value="draf">Draf</button> 
                  <button class="btn bg-gradient-success w-auto me-2" type="submit" name="status_pelan" value="hantar" >Hantar</button> 

                </form>
            

            </div>
          </div>
         
        </div>
      
@stop


