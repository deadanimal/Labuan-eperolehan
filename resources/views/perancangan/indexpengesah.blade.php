@extends('base')  

@section('content')

<link rel="stylesheet" type="text/css" href=https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src=https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js></script>

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
             
              <table id="example-table1" class="order-column" style="width:100%">
                <thead>
                  <tr>
                      <th>Tahun Perolehan</th>
                      <th>Nama Perolehan</th>
                      <th>Kategori Perolehan</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($perancangan as $perancangans)
                  <tr>
                    <td>{{$perancangans->tahun_pelan}}</td>
                    <td>{{$perancangans->tajuk_perolehan}}</a></td>
                    <td>{{$perancangans->kategori}}</td>
                    <td>{{$perancangans->status}}</td>
                    <td><a href="/editpengesah/{{$perancangans->id}}"><img src="/edit_icon.png" width=15px;></td>
                    </tr>
                    @endforeach
                </tbody>

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