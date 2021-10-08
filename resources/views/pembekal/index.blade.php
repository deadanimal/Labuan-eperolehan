@extends('base')

@section('content')


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src=https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js></script>

<h3>Senarai Pembekal Berdaftar</h3>
</div>
<!-- Else bootstrap marketplace -->
<br><br>  

<div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
  <div class="container border-bottom">
    <div class="row justify-space-between py-2">
      <div class="col-lg-3 me-auto">
      </div>

      <br><br>
      <table id="example-table1" class="order-column" style="width:100%">
        <thead>
                <tr>
                  <th>Jenis Pembekal</th>
                  <th>Nama Syarikat</th>
                  <th>No Pendaftaran Syarikat</th>
                  <th>Tindakan</th>
                </tr>
        </thead>
        <tbody>
          @foreach ($pembekal as $pembekal)
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
                      $('#example-table1').DataTable({
                          "order": [
                              [3, "desc"]
                          ]
                      });
                  });
        </script>
@stop


