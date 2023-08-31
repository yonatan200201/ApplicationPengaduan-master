@extends('layouts.main')

@section('content')
<!-- Section: Contact v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
    eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-12">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.1833177302012!2d99.14733585790243!3d2.3834604794563377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fc4d459469%3A0xf4284a91f4ac955c!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1590745177287!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Institut Teknologi Del</p>
          <p class="mb-md-0">Sitoluama, Lagu Boti, Kabupaten Toba Samosir, Sumatera Utara</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>(0632) 331234</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>Website: http://www.del.ac.id</p>
          <p class="mb-0">Email: info@del.ac.id</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
@endsection