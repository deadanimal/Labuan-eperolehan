@extends('base')  

@section('content')

<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>

</head>

  <h3>Senarai Perolehan</h3>
        </div>
        <!-- Else bootstrap marketplace -->
  <br><br>  

        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row justify-space-between py-2">
              <div class="col-lg-3 me-auto">
              </div>
              <a href="perancangan/create" style="text-align:right" class="btn bg-gradient-success w-auto me-2">Cipta Perolehan</a>
           
              <br><br>
             
              <table width="50%" class="stripe" id="example">
                <thead>
                  <tr>
                    <th>Tahun Perolehan</th>
                    <th>Nama Perolehan</th>
                    <th>Kategori Perolehan</th>
                    <th>Status</th>
                    <th colspan="2">Tindakan</th>
                  </tr>
                </thead>

                @foreach($perancangan as $perancangan)
                <tbody>
                  <tr>
                    <td>{{$perancangan->tahun_pelan}}</td>
                    <td>{{$perancangan->tajuk}}</td>
                    <td>{{$perancangan->kategori}}</td>
                    <td>{{$perancangan->status}}</td>
                    <td><a href="/cetakpelan/{{$perancangan->id}}">Cetak</a></td>
                    <td><a href="/perancangan/{{$perancangan->id}}/edit"><img src="/edit_icon.png" width=15px;></td>
                    @endforeach
                </tr>
                </tbody>

              </table>
            </div>
          </div>
  
            </div>
            </div>
          </div>
        </div>
@stop


