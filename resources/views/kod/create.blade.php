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
<a href="/kod" class="previous round">&#8249;</a>
<br><br>
    </div>
    <!-- Else bootstrap marketplace -->
    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
      <div class="container border-bottom">
        <div class="row justify-space-between py-2">
          <div class="col-lg-3 me-auto">
          </div>
              <form class="form-inline" method="POST" action="/kod" enctype="multipart/form-data"> 
                @csrf
                <br>
        
                  <legend>Pendaftaran Kod Bidang</legend>
                  <br><br>
                  
                  <div class="col-md-6 ps-md-2">
                    <label>Jenis Kod</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" name="jenis_kod" style="text-transform: capitalize;" >
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Kategori Kod</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" name="kategori_kod" style="text-transform: capitalize;">
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Pengkhususan Kod</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" name="pengkhususan_kod" maxlength="6" style="text-transform: capitalize;">
                    </div>
                  </div>

                  <div class="col-md-6 ps-md-2">
                    <label>Deskripsi Kod</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" name="deskripsi_kod" style="text-transform: capitalize;">
                    </div>
                  </div>


    
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


