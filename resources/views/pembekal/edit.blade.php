@extends('base')  

@section('content')
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
  </head>
  
<body class="features-sections">
<a href="/pembekal">Kembali</a>

  <h3>Pendaftaran Pembekal</h3>
</div>
<!-- Else bootstrap marketplace -->
<div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
  <div class="container border-bottom">
    <div class="row justify-space-between py-2">
      <div class="col-lg-3 me-auto">
      </div>

      <section>
        <form method="POST" action="/pembekal/{{$pembekal->id}}">
          @csrf
          @method('PUT')
                <div class="card-body">

                <fieldset>

                <label>Jenis Akaun</label>
                <select name="jenis_akaun" class="form-control" id="jenis_akaun">
                  <option hidden>Sila Pilih</option>
                  <option @if ($perancangan->kategori=='Asas') selected @endif value='Asas'>Asas</option>
                  <option @if ($perancangan->kategori=='Pembekal') selected @endif value='Pembekal'>Pembekal</option>
                  <option @if ($perancangan->kategori=='Kerja') selected @endif value='Kerja'>Kerja </option>
                </select>
                
                  <div class="row">
                    <div class="col-md-6">
                      <label>No Pendaftaran Perniagaan</label>
                      <div class="input-group mb-4">
                        <input class="form-control" type="text" name="no_pendaftaran" value="{{$pembekal->no_pendaftaran}}">
                      </div>
                    </div>
                    <div class="col-md-6 ps-2">
                      <label>Nama Pemilik</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="nama_pemilik" value="{{$perancangan->nama_pemilik}}">
                      </div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Kewarganegaraan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="kewarganegaraan" value="{{$perancangan->kewarganegaraan}}">
                    </div>
                  </div>
                  
                  <div class="mb-4">
                    <label>Jenis Pengenalan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="jenis_pengenalan" value="{{$perancangan->jenis_pengenalan}}">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>No Kad Pengenalan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="kad_pengenalan" value="{{$perancangan->kad_pengenalan}}" >
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Nama Perniagaan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="nama_perniagaan" value="{{$perancangan->nama_perniagaan}}">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Lokasi Pendaftaran</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="lokasi" value="{{$perancangan->lokasi}}">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" value="{{$perancangan->email}}">
                    </div>
                  </div>

                <div class="row">
                    <div class="col-md-6">
                      <label>Tarikh Penubuhan</label>
                      <div class="input-group mb-4">
                        <input class="form-control" name="tarikh_penubuhan" type="date" value="{{$perancangan->tarikh_penubuhan}}" >
                      </div>
                    </div>

                    <div class="col-md-6 ps-2">
                      <label>No Cukai Pendapatan</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="no_cukai" value="{{$perancangan->no_cukai}}">
                      </div>
                    </div>
                  </div>

                <div class="form-group mb-4">
                    <label>Alamat Syarikat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="4">{{$perancangan->alamat}}</textarea>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <label>Poskod</label>
                    <div class="input-group mb-4">
                      <input class="form-control" name="poskod" type="text" value="{{$perancangan->poskod}}">
                    </div>
                  </div>

                  <div class="col-md-6 ps-2">
                    <label>Negeri</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="negeri" value="{{$perancangan->negeri}}">
                    </div>
                  </div>

                  <div class="col-md-6 ps-2">
                    <label>Daerah</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="daerah" value="{{$perancangan->daerah}}">
                    </div>
                  </div>

                  <div class="col-md-6 ps-2">
                    <label>Bandar</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="bandar" value="{{$perancangan->bandar}}">
                    </div>
                  </div>
                </div>

                  <div class="mb-4">
                    <label>No Telefon</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="no_tel" value="{{$perancangan->no_tel}}">
                    </div>
                  </div>

              <div class="row">
                <div class="col-md-6">
                  <label>No Telefon Pejabat</label>
                  <div class="input-group mb-4">
                    <input class="form-control" type="text" name="no_pejabat" value="{{$perancangan->no_pejabat}}">
                  </div>
                </div>

                <div class="col-md-6 ps-2">
                  <label>No Faks</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="no_faks" value="{{$perancangan->no_faks}}">
                  </div>
                </div>
              </div>

            </fieldset>

            <fieldset>
              <h6>Maklumat Bank</h6>
              <div class="col-md-6 ps-2">
                <label>Nama Bank</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" name="nama_bank" value="{{$perancangan->nama_bank}}">
                </div>
              </div>

              <div class="col-md-6 ps-2">
                <label>No Akaun Bank</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="no_akaun" value="{{$perancangan->no_akaun}}">
                </div>
              </div>

            </div>

          </fieldset>
      
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-check form-switch mb-4">
                        {{-- <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Kembali</button> --}}
                        <a href="/pembekal" class="btn bg-gradient-light mb-0 js-btn-prev">Kembali</a>
                        <button type="submit" class="btn bg-gradient-dark mb-0 js-btn">Daftar</button>
                      </div>
                    </div>
                  </div>

           
              </form>
      </section>
            
            </div>
          </div>
         
        </div>
      
@stop


