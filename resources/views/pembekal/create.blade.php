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
  <style>

    .required {
      color: red;
    }

  </style>
  
<body class="features-sections">

  <h3>Pendaftaran Pembekal</h3>

</div>
<br><br>
<!-- Else bootstrap marketplace -->
<div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
  <div class="container border-bottom">
    <div class="row justify-space-between py-2">
      <div class="col-lg-3 me-auto">
      </div>

      <section>
        <form class="form-inline" method="POST" action="/pembekal" enctype="multipart/form-data"> 
          @csrf
          
          <br><br>
          <div class="card-body">
 
        <fieldset>
          <legend>Maklumat Syarikat</legend>
         
            <div class="mb-4">
            <label>Nama Syarikat</label><span class="required">*</span>
              <div class="input-group">
                <input type="text" required class="form-control" name="nama_perniagaan"  >
              </div>
            </div>

            <div class="mb-4">
              <label>No Pendaftaran Syarikat</label><span class="required">*</span>
              <div class="input-group mb-4">
                <input class="form-control" type="text"  required name="no_pendaftaran" style="width:20%" >
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label>Sijil SSM</label><span class="required">*</span>
                <div class="input-group mb-4">
                  <input class="form-control" name="sijil_ssm" type="file" required>
                </div>
              </div>

              <div class="col-md-6 ps-2">
                <label>Lesen Perniagaan</label><span class="required">*</span>
                <div class="input-group">
                  <input type="file" class="form-control" name="lesen_perniagaan">
                </div>
              </div>
            </div>


            <div class="mb-4">
              <label>Lokasi Pendaftaran</label> <span class="required">*</span>
              <div class="input-group">
                <select class="form-control" name="lokasi" required >
                  <option hidden>Sila Pilih</option>
                  <option value="Johor">Johor</option>
                  <option value="Kedah">Kedah</option>
                  <option value="Kelantan">Kelantan</option>
                  <option value="W.P Kuala Lumpur">W.P Kuala Lumpur</option>
                  <option value="W.P Labuan">W.P Labuan</option>
                  <option value="Melaka">Melaka</option>
                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                  <option value="Pahang">Pahang</option>
                  <option value="Penang">Penang</option>
                  <option value="Perak">Perak</option>
                  <option value="Perlis">Perlis</option>
                  <option value="W.P Putrajaya">W.P Putrajaya</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Selangor">Selangor</option>
                  <option value="Terengganu">Terengganu</option>
                </select>
              </div>
            </div>

          <div class="row">
              <div class="col-md-6">
                <label>Tarikh Penubuhan</label> <span class="required">*</span>
                <div class="input-group mb-4">
                  <input class="form-control" name="tarikh_penubuhan" type="date"  required>
                </div>
              </div>

              <div class="col-md-6 ps-2">
                <label>No Cukai Pendapatan</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="no_cukai" >
                </div>
              </div>
            </div>

          <div class="form-group mb-4">
              <label>Alamat Syarikat</label> <span class="required">*</span>
              <textarea name="alamat" class="form-control" id="alamat" rows="4" cols="2" required></textarea>
              {{-- <input type="text" requiredname="alamat" class="form-control"> --}}
          </div>

          <div class="row">
            <div class="col-md-6">
              <label>Poskod</label> <span class="required">*</span>
              <div class="input-group mb-4">
                <input class="form-control" name="poskod" type="text" required>
              </div>
            </div>
           

            <div class="col-md-6 ps-2">
              <label>Negeri</label> <span class="required">*</span>
              <div class="input-group">
                <select class="form-control" name="negeri" required>
                  <option hidden>Sila Pilih</option>
                  <option value="Johor">Johor</option>
                  <option value="Kedah">Kedah</option>
                  <option value="Kelantan">Kelantan</option>
                  <option value="W.P Kuala Lumpur">W.P Kuala Lumpur</option>
                  <option value="W.P Labuan">W.P Labuan</option>
                  <option value="Melaka">Melaka</option>
                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                  <option value="Pahang">Pahang</option>
                  <option value="Penang">Penang</option>
                  <option value="Perak">Perak</option>
                  <option value="Perlis">Perlis</option>
                  <option value="W.P Putrajaya">W.P Putrajaya</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Selangor">Selangor</option>
                  <option value="Terengganu">Terengganu</option>
                </select>
            </div>
            </div>

            <div class="col-md-6 ps-2">
              <label>Daerah</label> <span class="required">*</span>
              <div class="input-group">
                <input type="text" required class="form-control" name="daerah" >
              </div>
            </div>

            <div class="col-md-6 ps-2">
              <label>Bandar</label> <span class="required">*</span>
              <div class="input-group">
                <input type="text" required class="form-control" name="bandar" >
              </div>
            </div>
          </div>

          <div class="mb-4">
            <label>No Telefon Bimbit</label> <span class="required">*</span>
            <div class="input-group">
              <input type="text" required class="form-control" name="no_tel" >
            </div>
            </div>

        <div class="row">
          <div class="col-md-6">
            <label>No Telefon Pejabat</label> 
            <div class="input-group mb-4">
              <input class="form-control" type="text" name="no_pejabat">
            </div>
          </div>

          <div class="col-md-6 ps-2">
            <label>No Faks</label> 
            <div class="input-group">
              <input type="text" class="form-control" name="no_faks" >
            </div>
          </div>
        </div>

      </fieldset>

      <fieldset>
        <legend>Maklumat Pentadbir </legend>

                    <div class="mb-4">
                      <label>Nama Pemilik</label> <span class="required">*</span>
                      <div class="input-group">
                        <input type="text" class="form-control" name="nama_pemilik" required >
                      </div>
                    </div>
                  
                    <div class="mb-4">
                      <label>Kewarganegaraan</label> <span class="required">*</span>
                      <div class="input-group">
                        <input type="text" class="form-control" name="kewarganegaraan" required>
                      </div>
                      </div>
  
                    
                    <div class="mb-4">
                      <label>Jenis Pengenalan</label> <span class="required">*</span>
                      <div class="input-group">
                        <input type="text" class="form-control" name="jenis_pengenalan"  required>
                      </div>
                    </div>

                  <div class="mb-4">
                    <label>No Kad Pengenalan</label> <span class="required">*</span>
                    <div class="input-group">
                      <input type="text" class="form-control" name="kad_pengenalan" required >
                    </div>
                    </div>

                  
                  <div class="mb-4">
                    <label>Email</label> <span class="required">*</span>
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" >
                    </div>
                  </div>


                </fieldset>


                  <fieldset>
                    <legend>Maklumat Bank</legend>

                  <div class="row">
                    <div class="col-md-6">
                      <label>Nama Bank</label> <span class="required">*</span>
                      <div class="input-group mb-4">
                        <select name="nama_bank" class="form-control" required>
                          <option hidden>Sila Pilih</option>
                          <option value=”ABNAMYK”>	THE ROYAL BANK OF SCOTLAND</option>
                          <option value=”AFBQMYKL”>ASIAN FINANCE BANK BHD</option>
                          <option value=”AGOBMYKL”>AGRO BANK</option>
                          <option value=”AIBBMYKL”>AFFIN ISLAMIC BANK BERHAD</<option>
                          <option value=”AISLMYKL”>AMISLAMIC BANK BERHAD</option>
                          <option value=”AMMB9999”>AM INVESTMENT BANK BERHAD SPI</option>
                          <option value=”AMMBMYKL”>AM INVESTMENT BANK BERHAD</option>
                          <option value=”ARBKMYKL”>AM BANK BERHAD</option>
                          <option value=”AVSSMYK1”>AVENUE SECURITIES SDN BHD</option>
                          <option value=”BIMBMYKL”>BANK ISLAM MALAYSIA BERHAD</option>
                          <option value=”BKCHMYKL”>BANK OF CHINA MALAYSIA BHD</option>
                          <option value=”BKKBMYKL”>BANGKOK BANK</option>
                          <option value=”BKRMMYKL”>BANK KARJASAMA RAKYAT MALAYSIA BERHAD</option>
                          <option value=”BMMBMYKL”>BANK MUAMALAT MALAYSIA BERHAD</option>
                          <option value=”BNMAMYKL”>BANK NEGARA MALAYSIA</option>
                          <option value=”BOFAMY2X”>BANK OF AMERICA MALAYSIA BERHAD</option>
                          <option value=”BOTKMYKX”>BANK OF TOKYO-MITSUBISHI (M) BERHAD</option>
                          <option value=”BSNA9999”>BANK SIMPANAN NASIONAL SPI</option>
                          <option value=”BSNAMYK1”>BANK SIMPANAN NASIONAL</option>
                          <option value=”CAGA9999”>CAGAMAS BHD SPI</option>
                          <option value=”CAGAMYK1”>CAGAMAS BHD</option>
                          <option value=”CHASMYKX”>JP MORGAN CHASE BANK BHD</option>
                          <option value=”CIBBMYKL”>CIMB BANK BERHAD</<option>
                          <option value=”CITI9999”>CITIBANK SPI</option>
                          <option value=”CITIMYKL”>CITIBANK BERHAD</option>
                          <option value=”COIM9999”>CIMB INVESTMENT BANK BHD SPI</option>
                          <option value=”COIMMYK1”>CIMB INVESTMENT BANK BHD</option>
                          <option value=”CTBBMYKL”>CIMB ISLAMIC BANK BHD</option>
                          <option value=”DEUTMYKL”>DEUTSCHE BANK (MALAYSIA) BERHAD</option>
                          <option value=”EIBBMYKL”>EONCAP ISLAMIC BANK BHD</option>
                          <option value=”EOBBMYKL”>EON BANK BERHAD</option>
                          <option value=”HBMB9999”>HONGKONG BANK MALAYSIA BHD SPI</option>
                          <option value=”HBMBMYKL”>HONGKONG BANK MALAYSIA BHD</option>
                          <option value=”HDSBMY2P”>HWANG-DBS SECURITIES BERHAD</option>
                          <option value=”HLBBMYKL”>HONG LEONG BANK</option>
                          <option value=”KAFD9999”>KAF INVESTMENT BANK BHD SPI</option>
                          <option value=”KAFDMYK1”>KAF INVESTMENT BANK BHD</option>
                          <option value=”KFHOMYKL”>KUWAIT FINANCE HOUSE MALAYSIA BERHAD</option>
                          <option value=”KKENMYK1”>KENANGA INVESTMENT BANK BERHAD</option>
                          <option value=”KWAPMYK1”>Bank Negara Malaysia</option>
                          <option value=”KWSPMYK1”>KUMPULAN WANG SIMPANAN PEKERJA</option>
                          <option value=”MBAM9999”>ALLIANCE INVESTMENT BANK BHD SPI</option>
                          <option value=”MBAMMYK1”>ALLIANCE INVESTMENT BANK BHD</</option>
                          <option value=”MBBE9999”>MALAYAN BANKING BHD SPI</option>
                          <option value=”MBBEMYKL”>MALAYAN BANKING BERHAD</option>
                          <option value=”MBEA9999”>ASEAMBANKERS SPI</option>
                          <option value=”MBEAMYK1”>ASEAMBANKERS MALAYSIA BERHAD</option>
                          <option value=”MFBB9999”>ALLIANCE BANK MALAYSIA BHD SPI</option>
                          <option value=”MFBBMYKL”>ALLIANCE BANK MALAYSIA BERHAD</option>
                          <option value=”MIMBMYKL”>MIMB INVESTMENT BANK BERHAD</option>
                          <option value=”NOSCMYKL”>THE BANK OF NOVA SCOTIA BERHAD</option>
                          <option value=”OCBC9999”>OCBC BANK MALAYSIA BHD SPI</option>
                          <option value=”OCBCMYKL”>OCBC BANK MALAYSIA BHD</option>
                          <option value=”OSSBMYK1”>OSK SECURITIES BERHAD</option>
                          <option value=”PAMBMYK1”>AFFIN INVESTMENT BANK BHD</option>
                          <option value=”PBBE9999”>PUBLIC BANK BHD SPI</option>
                          <option value=”PBBEMYKL”>PUBLIC BANK BERHAD</option>
                          <option value=”PERDMYK1”>SOUTHERN INVESTMENT BANK BHD</option>
                          <option value=”PHBMMYKL”>AFFIN BANK BERHAD</option>
                          <option value=”RHBAMYKL”>RHB ISLAMIC BANK BHD</option>
                          <option value=”RHBBMYKL”>RHB BANK BERHAD</option>
                          <option value=”RHBMMYK1”>RHB INVESTMENT BANK BHD</option>
                          <option value=”RJHIMYKL”>AL-RAJHI BANKING & INVESTMENT</option>
                          <option value=”SCBL9999”>STANDARD CHARTERED BANK BHD SPI</option>
                          <option value=”SCBLMYKX”>STANDARD CHARTERED BANK MALAYSIA BHD</option>
                          <option value=”SMBBMYK1”>PUBLIC INVESTMENT BANK BHD</option>
                          <option value=”UMBB9999”>MIDF AMANAH INVESTMENT BANK BHD SPI</option>
                          <option value=”UMBBMYK1”>MIDF AMANAH INVESTMENT BANK BHD</option>
                          <option value=”UOVBMYKL”>UNITED OVERSEAS BANK MALAYSIA BEHAD</option>
                          </select>
                          
                      </div>
                    </div>

                    <div class="col-md-6 ps-2">
                      <label>No Akaun</label> <span class="required">*</span>
                      <div class="input-group">
                        <input type="text" class="form-control" name="no_akaun" required>
                      </div>
                    </div>
                  </div>

                </fieldset>

          <br>          
          <div class="mb-4">
            <label>Jenis Akaun</label>
            {{-- <div class="input-group">
              <select name="jenis_akaun[]" class="form-control" >
                <option hidden>Sila Pilih</option>
                <option value="Asas">Asas</option>
                <option value="Pembekal">Bekalan dan Perkhidmatan (MOF)</option>
                <option value="Kerja">Kerja</option>
              </select> --}}

              <div class="form-check">
                <input type="checkbox" name="jenis_akaun[]" value="Bekalan & Perkhidmatan(MOF)" class="form-check-input">Bekalan dan Perkhidmatan (MOF)
              </div>
              <br>

              <div class="form-check">
                <input type="checkbox" name="jenis_akaun[]" value="Kerja" class="form-check-input">Kerja
              </div>
              
              <br><br>
            </div>


          <br><br>
                        {{-- <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Kembali</button> --}}
                        <a href="/pembekal" class="btn bg-gradient-light w-auto me-2">Kembali</a>
                        <button type="submit" class="btn bg-gradient-primary w-auto me-2">Daftar</button>


              </form>
      </section>
            
            </div>
          </div>
         
        </div>
      
      <section>
      
@stop


