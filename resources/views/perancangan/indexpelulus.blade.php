@extends('base')  

@section('content')


  <h3>Senarai Perolehan</h3>  
  <br><br>
  
        </div>
        <!-- Else bootstrap marketplace -->
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row justify-space-between py-2">
              <div class="col-lg-3 me-auto">
              </div>
              <br><br>
             
              <table width="50%" class="table table-striped">
                
                <tr>
                  <th>Bil</th>
                  <th>Tahun Perolehan</th>
                  <th>Nama Perolehan</th>
                  <th>Kategori Perolehan</th>
                  <th>Status</th>
                  <th>Cetak Pelan</th>
                </tr>

                @foreach($perancangan as $perancangan)
                <tr>
                  <td>{{$perancangan->id}}</td>
                  <td>{{$perancangan->tahun_pelan}}</td>
                  <td><a href="/editpelulus/{{$perancangan->id}}">{{$perancangan->tajuk}}</a></td>
                  <td>{{$perancangan->kategori}}</td>
                  <td>{{$perancangan->status}}</td>

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


