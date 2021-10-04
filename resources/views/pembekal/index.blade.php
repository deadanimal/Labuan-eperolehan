@extends('base')  

@section('content')

  
  <h3>Senarai Pembekal</h3> 
  <br><br>
    <head>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> 
    </head>

        </div>
        <!-- Else bootstrap marketplace-->
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row justify-space-between py-2">
              <div class="col-lg-3 me-auto">
              </div>
              <br><br>
             
              <table id="example" class="stripe" style="width:50%">
                <tr>
                  <th>Jenis Pembekal</th>
                  <th>Nama Syarikat</th>
                  <th>No Pendaftaran Syarikat</th>
                  <th>Tindakan</th>
                </tr>

                @foreach($pembekal as $pembekal)
                <tr>
                  <td>{{$pembekal->jenis_akaun}}</td>
                  <td>{{$pembekal->nama_perniagaan}}</td>
                  <td>{{$pembekal->no_pendaftaran}}</td>
                  <td><a href="/pembekal/{{$pembekal->id}}/edit"><img src="/edit_icon.png" width=15px;></a></td>
                  @endforeach
                </tr>

              </table>

            </div>
          </div>
  
            </div>
            </div>
          </div>
        </div>
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
        </script>
@stop


