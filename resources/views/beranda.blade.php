@extends('layouts.main')

@php
$totalpengaduan = DB::table('pengaduan')->count();
$totaluser = DB::table('users')->count();
$totalpengaduansudah = DB::table('pengaduan')->where('status', '!=', 'Diproses')->count();
$totalustadz = DB::table('users')->where('role', '=', 'ustadz')->count();
@endphp

@section('content')
<div class="container">
  <div class="row  animated fadeInRight">
    <div class="col-md mb-4">
      <div class="card-header" role="tab" id="headingOne1" style="background-color:#4169E1;">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
          aria-controls="collapseOne1">
          <h5 class="mb-0 text-white m-1">
            <b>Informasi Aplikasi </b>

          </h5>
        </a>
      </div>
    </div>
  </div>
  <div class="row  wow fadeInRight delay-1s">
    <div class="col-md-12">
      <canvas id="barChart" height="105px"></canvas>
    </div>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-md-4 wow fadeInUp delay-1s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg danger-color ml-4"><i class="fas fa-edit"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">
            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totalpengaduan}} </h5>
            <p class="font-small grey-text">Total Pengaduan</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
    <div class="col-md-4 wow fadeInUp delay-2s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg danger-color ml-4"><i class="fas fa-user"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">

            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totaluser}} </h5>

            <p class="font-small grey-text">Total User</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

        </div>
    </div>
    <div class="col-md-4 wow fadeInUp delay-3s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg danger-color ml-4"><i class="fas fa-user-graduate"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">

            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">1</h5>

            <p class="font-small grey-text">Total Admin</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
  </div>
  <hr>
  <div class="row  wow fadeInRight">
    <div class="col-sm-12">
      <!--Accordion wrapper-->
      <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

          <!-- Card header -->
          <div class="card-header" role="tab" id="headingOne1" style="background-color:#4169E1;">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0 text-white">
                <b>Laporan Pengaduan COVID19</b><i class="fas fa-angle-down rotate-icon"></i>
              </h5>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
            data-parent="#accordionEx">
            <div class="card-body">
              <!--Carousel Wrapper-->
              <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-2" data-slide-to="1"></li>
                  <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="view">
                      <img class="d-block w-100"
                        src="{{asset('img/2.png')}}" alt="First slide" width="100px" height="400 px" >
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Light mask</h3>
              <p>First text</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100"
                        src="{{asset('img/1.jpg')}}" alt="Second slide" width="100px" height="400 px">
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Strong mask</h3>
              <p>Secondary text</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100"
                        src="{{asset('img/3.jpg')}}" alt="Third slide" width="100px" height="400 px">
                      <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Slight mask</h3>
              <p>Third text</p> --}}
                    </div>
                  </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
          </div>
        </div>

      </div>
      <!-- Accordion card -->


    </div>
  </div>
  <div class="row">
    <div class="col-sm-7 wow fadeInRight">
      <br>
      <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

          <!-- Card header -->
          <div class="card-header" role="ta" id="headingOne1" style="background-color:#4169E1;">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0 text-white">
                <b>Informasi dan Berita tentang COVID'19</b><i class="fas fa-angle-down rotate-icon"></i>
              </h5>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
            data-parent="#accordionEx">
            <div class="card-body">
              <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating btn-danger" href="#multi-item-example" data-slide="prev"><i
                      class="fas fa-chevron-left"></i></a>
                  <a class="btn-floating btn-danger" href="#multi-item-example" data-slide="next"><i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item-example" data-slide-to="1"></li>
                  <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                  <!--First slide-->
                  <div class="carousel-item active">

                    <div class="col-md-4">
                      <div class="card mb-2">
                      <img class="card-img-top"
                          src="{{asset('img/corona.jpg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Virus Corona (COVID-19)</h5>
                          <p class="card-text">Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) 
                          adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. 
                          Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, 
                          hingga kematian.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                        src="{{asset('img/4.jpg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Gejala Awal Corona COVID-19 dan Penanganan yang Harus Dilakukan</h5>
                          <p class="card-text">Organisasi Kesehatan Dunia (WHO) menjelaskan beberapa gejala awal orang yang 
                          terinfeksi virus corona COVID-19, yaitu demam, kelelahan, dan batuk kering. Beberapa pasien juga mengalami 
                          sakit dan nyeri, hidung tersumbat, pilek, sakit tenggorokan atau diare.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                        src="{{asset('img/5.jpg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Khawatir Terinfeksi Corona, Apa Saja Gejala yang Harus Dicurigai?</h5>
                          <p class="card-text">Di tengah wabah pandemi Covid-19 yang sedang melanda negeri ini, banyak di antara 
                          masyarakat yang mulai curiga terhadap keluhan yang tiba-tiba dirasakan tubuhnya. Lantas, apa saja gejala
                          atau keluhan yang memang butuh dicurigai sebagai pertanda terinfeksi virus Corona, SARS-CoV-2 penyebab Covid-19?</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/.First slide-->

                  <!--Second slide-->
                  <div class="carousel-item">

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="{{asset('img/6.jpeg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Terpukul Corona, Ini 5 Keluhan Para Pelaku UMKM</h5>
                          <p class="card-text">JAKARTA, KOMPAS.com - Kementerian Koperasi dan UKM (Kemenkop UKM) menerima 
                          laporan 949 pelaku koperasi dan usaha mikro, kecil dan menengah (UMKM) yang terdampak wabah virus 
                          corona (Covid-19).</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="{{asset('img/7.webp')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Ini Kunci Keberhasilan Isolasi Mandiri dari Virus Corona Covid-19</h5>
                          <p class="card-text">Liputan6.com, Jakarta - Direktur Jenderal Pencegahan dan Pengendalian Penyakit 
                          (P2P) Kementerian Kesehatan (Kemenkes) Achmad Yurianto mengungkap hal tentang keberhasilan melawan 
                          virus corona covid-19. Dia menyebut isolasi selama 14 hari tanpa keluhan menjadi hal yang utama.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="{{asset('img/8.jpeg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Dampak Pandemi Covid-19 Bagi Penyelenggaraan Pelayanan Publik</h5>
                          <p class="card-text">Dunia sedang dihebohkan dengan munculnya Pandemi Corona Virus Disease (Covid-19), 
                          yang membawa dampak signifikan ke perubahan dunia. Mulai dari  aspek ekonomi, sosial, hingga kehidupan sehari-hari, 
                          hampir tak ada yang bisa berkelit dari kemunculan virus Covid-19 ini, tidak terkecuali terhadap pelayanan publik 
                          sejak virus corona pertama kali muncul akhir Desember 2019 lalu.</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/.Second slide-->

                  <!--Third slide-->
                  <div class="carousel-item">

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="{{asset('img/9.jpg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">LaporCovid-19 Catat Banyak Keluhan Warga Soal Lambatnya Tes Corona</h5>
                          <p class="card-text">Koalisi Warga Lapor Covid-19 mencatatkan banyak keluhan masyarakat terkait tes virus corona 
                          di Indonesia. Inisiator Koalisi Warga Lapor Covid-19 Irma Hidayana mengatakan, salah satu persoalan yang sering 
                          dikeluhkan masyarakat terkait lambatnya penyampaian hasil tes corona dengan metode polymerase chain reaction (PCR).</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="{{asset('img/10.jpeg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Jubir: Positif Corona Keluhan Ringan Tak Perlu Dirawat di RS </h5>
                          <p class="card-text">Jakarta, CNN Indonesia -- Juru bicara pemerintah untuk penanganan virus corona, Achmad Yurianto 
                          menyebut orang yang sudah dinyatakan positif terinfeksi virus corona atau Covid-19 namun dengan gejala ringan tak perlu 
                          dirawat di rumah sakit.Pasien tersebut menurutnya cukup dengan hanya mengisolasi diri di rumah. </p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top"
                          src="{{asset('img/11.jpg')}}"
                          alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Kawal informasi seputar COVID-19 secara tepat dan akurat.</h5>
                          <p class="card-text">Jumlah Kasus di Indonesia Saat Ini
                            23851 : Terkonfirmasi
                            16321 : Dalam Perawatan
                            6057  : Sembuh
                            1473  : Meninggal</p>
                          <a class="btn btn-danger">Lihat</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/.Third slide-->

                </div>
                <!--/.Slides-->

              </div>
              <!--/.Carousel Wrapper-->

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 wow fadeInUp">
     <!-- Card -->
     <br>
      <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist" style="background-color:#4169E1;">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab"
            aria-controls="home-md" aria-selected="true">Tata Cara</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab"
            aria-controls="profile-md" aria-selected="false">Tujuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#contact-md" role="tab"
            aria-controls="contact-md" aria-selected="false">Kontak</a>
        </li>
      </ul>
      <div class="tab-content card pt-5" id="myTabContentMD">
        <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
          <h5 class="text-center h5-responsive">Tata cara menyampaikan keluhan</h5>
          <center><img src="{{asset('img/12.jpg')}}"
            alt="Struktur Organisasi" class="img-fluid pb-3" alt="Responsive image" width="500px"></center>
        </div>
        <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
          <ul>
            <li>Mempermudah masyarakat menyampaikan aspirasinya untuk mempercepat proses pemberantasan COVID'19.</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="contact-md" role="tabpanel" aria-labelledby="contact-tab-md">
          <ul>
            <li>Layanan Pengaduan Program Keluarga Harapan Kementerian Sosial<br/>
                e-mail : pengaduan@pkh.kemsos.go.id<br/>
                call center : 1500299 (setiap hari kerja 08.00 s.d. 17.00 WIB)</li>
            <li>Layanan Pengaduan Bansos Kementerian Sosial<br/>
                e-mail : bansoscovid19@kemsos.go.id<br/>
                kontak layanan : 157<br/>
                WA : 0811-10-222-10</li>
            <li>Layanan Masyarakat Kartu Prakerja<br/>
                call center : 021-25541246 (setiap hari kerja 08.00 s.d. 19.00 WIB)</li>
            <li> Bantuan Langsung Tunai Desa<br/>
                call center : 1500040<br/>
                SMS center : 0877-8899-0040 atau 0812-8899-0040</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div>
    @endsection