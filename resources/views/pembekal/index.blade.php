@extends('base')  

@section('content')

  
  <h3>Senarai Pembekal</h3> 
  <br><br>

        </div>
        <!-- Else bootstrap marketplace-->
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row justify-space-between py-2">
              <div class="col-lg-3 me-auto">
              </div>
              <br><br>
             
              <table width="50%" class="table table-striped">
                
                <tr>
                  <th>Bil</th>
                  <th>Jenis Pembekal</th>
                  <th>Nama Perniagaan</th>
                  <th>No Pendaftaran Perniagaan</th>
                </tr>

                @foreach($pembekal as $pembekal)
                <tr>
                  <td>{{$pembekal->id}}</td>
                  <td>{{$pembekal->jenis_akaun}}</td>
                  <td><a href="/pembekal/{{$pembekal->id}}/edit">{{$pembekal->nama_perniagaan}}</a></td>
                  <td>{{$pembekal->no_pendaftaran}}</td>
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


