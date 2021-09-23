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
              <br><br>
             
              <table width="50%" class="table table-striped">
                
                <tr>
                  <th>Bil</th>
                  <th>Tahun Perolehan</th>
                  <th>Nama Perolehan</th>
                  <th>Kategori Perolehan</th>
                  <th>Status</th>
                </tr>

                @foreach($perancangan as $perancangans)
                <tr>
                  <td>{{$perancangans->id}}</td>
                  <td>{{$perancangans->tahun_pelan}}</td>
                  <td><a href="/editpengesah/{{$perancangans->id}}">{{$perancangans->tajuk}}</a></td>
                  <td>{{$perancangans->kategori}}</td>
                  <td>{{$perancangans->status}}</td>
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


