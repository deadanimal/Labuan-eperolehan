@extends('base')  

@section('content')

  <br><br>
  
  <h3>Senarai Perolehan</h3>  
        </div>
        <!-- Else bootstrap marketplace -->
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row justify-space-between py-2">
              <div class="col-lg-3 me-auto">
              </div>
              <a href="perancangan/create" style="text-align:right">Cipta Perolehan</a>
              <br><br>
             
              <table width="50%" class="table table-striped">
                
                <tr>
                  <th>Bil</th>
                  <th>Tahun Perolehan</th>
                  <th>Nama Perolehan</th>
                  <th>Kategori Perolehan</th>
                  <th>Status</th>
                  <th>Tindakan</th>
                </tr>

                @foreach($perancangan as $perancangan)
                <tr>
                  <td>{{$perancangan->id}}</td>
                  <td>{{$perancangan->tahun_pelan}}</td>
                  <td><a href="/perancangan/{{$perancangan->id}}/edit">{{$perancangan->tajuk}}</a></td>
                  <td>{{$perancangan->kategori}}</td>
                  <td>{{$perancangan->status}}</td>
                  <td><a href="/cetakpelan/{{$perancangan->id}}">Cetak</a>
                  @endforeach
              </tr>

              </table>

          

            </div>
          </div>
  
            </div>
            </div>
          </div>
        </div>
@stop


