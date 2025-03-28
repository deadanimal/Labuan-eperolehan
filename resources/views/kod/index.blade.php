@extends('base')  

@section('content')
  <h6>Senarai Kod Bidang Pendaftaran Bekalan & Perkhidmatan di Kementerian Kewangan Malaysia</h6>  
  <br><br>
        </div>
        <!-- Else bootstrap marketplace -->
        <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
          <div class="container border-bottom">
            <div class="row justify-space-between py-2"> 
              <div class="col-lg-3 me-auto">
              </div>
              <a href="kod/create" style="text-align:right" class="btn bg-gradient-success w-auto me-2"> + Tambah Kod Bidang</a>
              <br><br>
             
              <table width="50%" class="table table-striped">
                
                <tr>
                  <th>Jenis Kod Bidang</th>
                  <th>Kategori Bidang</th>
                  <th>Pengkhususan Bidang</th>
                  <th>Tindakan</th>
                </tr>

                @foreach($kod as $kod)
                <tr>
                  <td>{{$kod->jenis_kod}}</td>
                  <td>{{$kod->kategori_kod}}
                  <td>{{$kod->pengkhususan_kod}}</td>
                  <td><a href="/kod/{{$kod->id}}/edit"><img src="/edit_icon.png" width=15px;></td>

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


