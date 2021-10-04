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
<a href="/pembekal" class="previous round">&#8249;</a>

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
                  <option @if ($pembekal->jenis_akaun=='Asas') selected @endif value='Asas'>Asas</option>
                  <option @if ($pembekal->jenis_akaun=='Pembekal') selected @endif value='Pembekal'>Pembekal</option>
                  <option @if ($pembekal->jenis_akaun=='Kerja') selected @endif value='Kerja'>Kerja </option>
                </select>
                
                  <div class="row">
                    <div class="col-md-6">
                      <label>No Pendaftaran Syarikat</label>
                      <div class="input-group mb-4">
                        <input class="form-control" type="text" name="no_pendaftaran" value="{{$pembekal->no_pendaftaran}}">
                      </div>
                    </div>

                    <div class="col-md-6 ps-2">
                      <label>Nama Pemilik</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="nama_pemilik" value="{{$pembekal->nama_pemilik}}">
                      </div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Kewarganegaraan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="kewarganegaraan" value="{{$pembekal->kewarganegaraan}}">
                    </div>
                  </div>
                  
                  <div class="mb-4">
                    <label>Jenis Pengenalan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="jenis_pengenalan" value="{{$pembekal->jenis_pengenalan}}">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>No Kad Pengenalan</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="kad_pengenalan" value="{{$pembekal->kad_pengenalan}}" >
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Nama Syarikat</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="nama_perniagaan" value="{{$pembekal->nama_perniagaan}}">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Lokasi Pendaftaran</label>
                    <div class="input-group">
                      <select name="lokasi" class="form-control">
                      <option hidden="Sila Pilih"></option>
                      <option @if ($pembekal->lokasi=="Johor") selected @endif value="Johor">Johor</option>
                      <option @if ($pembekal->lokasi=="Selangor") @endif value="Selangor">Selangor</option>
                      <option @if ($pembekal->lokasi=="Kedah")selected   @endif value="Kedah">Kedah</option>
                      <option @if ($pembekal->lokasi=="Kelantan") selected @endif value="Kelantan">Kelantan</option>
                      <option @if ($pembekal->lokasi=="Kuala Lumpur" ) selected @endif value="Kuala Lumpur">Kuala Lumpur</option>
                      <option @if ($pembekal->lokasi=="Labuan") selected @endif value="Labuan">Labuan</option>
                      <option @if ($pembekal->lokasi=="Melaka")selected @endif value="Melaka">Melaka</option>
                      <option @if ($pembekal->lokasi=="Negeri Sembilan")selected  @endif value="Negeri Sembilan">Negeri Sembilan</option>
                      <option @if ($pembekal->lokasi=="Pahang")selected @endif value="Pahang">Pahang</option>
                      <option @if ($pembekal->lokasi=="Pulau Pinang")selected @endif value="Pulau Pinang">Pulau Pinang</option>
                      <option @if ($pembekal->lokasi=="Perak") selected @endif value="Perak">Perak</option>
                      <option @if ($pembekal->lokasi=="Perlis")@endif value="Perlis">Perlis</option>
                      <option @if ($pembekal->lokasi=="Putrajaya") @endif value="Putrajaya">Putrajaya</option>
                      <option @if ($pembekal->lokasi=="Sabah") @endif value="Sabah">Sabah</option>
                      <option @if ($pembekal->lokasi=="Sarawak") @endif value="Sarawak">Sarawak</option>
                      <option @if ($pembekal->lokasi=="Terengganu")@endif value="Terengganu">Terengganu</option>
                  </select>
                    </div>
                  </div>

                  <div class="mb-4">
                    <label>Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" value="{{$pembekal->email}}">
                    </div>
                  </div>

                <div class="row">
                    <div class="col-md-6">
                      <label>Tarikh Penubuhan</label>
                      <div class="input-group mb-4">
                        <input class="form-control" name="tarikh_penubuhan" type="date" value="{{$pembekal->tarikh_penubuhan}}" >
                      </div>
                    </div>

                    <div class="col-md-6 ps-2">
                      <label>No Cukai Pendapatan</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="no_cukai" value="{{$pembekal->no_cukai}}">
                      </div>
                    </div>
                  </div>

                <div class="form-group mb-4">
                    <label>Alamat Syarikat</label>
                    <textarea name="alamat" class="form-control" id="alamat" rows="4">{{$pembekal->alamat}}</textarea>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <label>Poskod</label>
                    <div class="input-group mb-4">
                      <input class="form-control" name="poskod" type="text" value="{{$pembekal->poskod}}">
                    </div>
                  </div>

                  <div class="col-md-6 ps-2">
                    <label>Negeri</label>
                    <div class="input-group">
                    <select name="negeri" class="form-control">
                      <option @if ($pembekal->negeri=="Johor") selected @endif value="Johor">Johor</option>
                      <option @if ($pembekal->negeri=="Selangor") @endif value="Selangor">Selangor</option>
                      <option @if ($pembekal->negeri=="Kedah")selected   @endif value="Kedah">Kedah</option>
                      <option @if ($pembekal->negeri=="Kelantan") selected @endif value="Kelantan">Kelantan</option>
                      <option @if ($pembekal->negeri=="Kuala Lumpur") selected @endif value="Kuala Lumpur">Kuala Lumpur</option>
                      <option @if ($pembekal->negeri=="Labuan") selected @endif value="Labuan">Labuan</option>
                      <option @if ($pembekal->negeri=="Melaka")selected @endif value="Melaka">Melaka</option>
                      <option @if ($pembekal->negeri=="Negeri Sembilan")selected  @endif value="Negeri Sembilan">Negeri Sembilan</option>
                      <option @if ($pembekal->negeri=="Pahang")selected @endif value="Pahang">Pahang</option>
                      <option @if ($pembekal->negeri=="Pulau Pinang")selected @endif value="Pulau Pinang">Pulau Pinang</option>
                      <option @if ($pembekal->negeri=="Perak") selected @endif value="Perak">Perak</option>
                      <option @if ($pembekal->negeri=="Perlis")@endif value="Perlis">Perlis</option>
                      <option @if ($pembekal->negeri=="Putrajaya") @endif value="Putrajaya">Putrajaya</option>
                      <option @if ($pembekal->negeri=="Sabah") @endif value="Sabah">Sabah</option>
                      <option @if ($pembekal->negeri=="Sarawak") @endif value="Sarawak">Sarawak</option>
                      <option @if ($pembekal->negeri=="Terengganu")@endif value="Terengganu">Terengganu</option>
                    </select>
                    </div>
                  </div>

                  <div class="col-md-6 ps-2">
                    <label>Daerah</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="daerah" value="{{$pembekal->daerah}}">
                    </div>
                  </div>

                  <div class="col-md-6 ps-2">
                    <label>Bandar</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="bandar" value="{{$pembekal->bandar}}">
                    </div>
                  </div>
                </div>

                  <div class="mb-4">
                    <label>No Telefon Bimbit</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="no_tel" value="{{$pembekal->no_tel}}">
                    </div>
                  </div>

              <div class="row">
                <div class="col-md-6">
                  <label>No Telefon Bimbit Pejabat</label>
                  <div class="input-group mb-4">
                    <input class="form-control" type="text" name="no_pejabat" value="{{$pembekal->no_pejabat}}">
                  </div>
                </div>

                <div class="col-md-6 ps-2">
                  <label>No Faks</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="no_faks" value="{{$pembekal->no_faks}}">
                  </div>
                </div>
              </div>

            </fieldset>

            <fieldset>
              <h6>Maklumat Bank</h6>
              <div class="col-md-6 ps-2">
                <label>Nama Bank</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" name="nama_bank" value="{{$pembekal->nama_bank}}">
                </div>
              </div>

              <div class="col-md-6 ps-2">
                <label>No Akaun Bank</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="no_akaun" value="{{$pembekal->no_akaun}}">
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


