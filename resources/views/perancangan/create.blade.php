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

    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <style>
      .currency {
      padding-left:12px;
    }

    .currency-symbol {
      position:absolute;
      padding: 2px 5px;
    }

    </style>

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
                      <input class="form-control" type="month" name="tahun_pelan">
                    </div>
                  </div>
                </div>
                
                    <label>Tajuk Pelan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="tajuk">
                    </div>
                  </div>
     

                <label>Perihal Pelan</label>
                <textarea name="perihal" class="form-control" rows="3"></textarea>
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
                    <input type="number"name="amaun" class="form-control" id="currency-field" pattern="^\RM\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="0.00">


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
              
                  <a href="/perancangan" class="btn bg-gradient-light w-auto me-2">Kembali</a>
                  <button class="btn bg-gradient-info w-auto me-2" type="submit" name="status_pelan" value="draf">Draf</button> 
                  <button class="btn bg-gradient-primary w-auto me-2" type="submit" name="status_pelan" value="hantar" >Hantar</button> 
      
                  
                </form>
                
            </div>
          </div>
         
        </div>

      <script src="https://code.jquery.com/jquery-3.6.0.js">
     
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">

        // Jquery Dependency

        $("input[data-type='currency']").on({
            keyup: function() {
              formatCurrency($(this));
            },
            blur: function() { 
              formatCurrency($(this), "blur");
            }
        });
        
        
        function formatNumber(n) {
          // format number 1000000 to 1,234,567
          return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }
        
        
        function formatCurrency(input, blur) {
          // appends $ to value, validates decimal side
          // and puts cursor back in right position.
          
          // get input value
          var input_val = input.val();
          
          // don't validate empty input
          if (input_val === "") { return; }
          
          // original length
          var original_len = input_val.length;
        
          // initial caret position 
          var caret_pos = input.prop("selectionStart");
            
          // check for decimal
          if (input_val.indexOf(".") >= 0) {
        
            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");
        
            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);
        
            // add commas to left side of number
            left_side = formatNumber(left_side);
        
            // validate right side
            right_side = formatNumber(right_side);
            
            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
              right_side += "00";
            }
            
            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);
        
            // join number by .
            input_val = "$" + left_side + "." + right_side;
        
          } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = "$" + input_val;
            
            // final formatting
            if (blur === "blur") {
              input_val += ".00";
            }
          }
          
          // send updated string to input
          input.val(input_val);
        
          // put caret back in the right position
          var updated_len = input_val.length;
          caret_pos = updated_len - original_len + caret_pos;
          input[0].setSelectionRange(caret_pos, caret_pos);
        }

        Swal.fire({
          icon: 'success',
          title: 'Data telah berjaya dimasukkan.',
          text: 'Sila tunggu Pegawai Pengesah untuk mengesahkan permohonan anda'

        })


      </script>
@stop


