@extends('layouts.landing')

@section('content')
<br />
<br />
<br />
<section class="banner-area relative" id="home">
  <div class="overlay-bg overlay"></div>
  <div class="container">
    <div class="row ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" style="height: 482.88px;" background-position: center center src="{{asset('blog/img/itens.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 482.88px;" background-position: center center src="{{asset('blog/img/itens1.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 482.88px;" background-position: center center src="{{asset('blog/img/itens2.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start travel Area -->
{{-- <section class="travel-area section-gap" id="travel">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Proposal Paling Baru</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
          </div>
        </div>
      </div>      
      <div class="row">
        <div class="col-lg-6 travel-left">
          @foreach ($prop1 as $p1)
          <div class="single-travel media pb-70">
            <img class="img-fluid d-flex  mr-3" src="{{asset("$p1->banner")}}" alt="" style="width:200px;height:300px;">
<div class="dates">
  <span>{{ explode(" ",$p1->historyLatest()->first()->upl_date)[0] }}</span>
  <p>{{ explode(" ",$p1->historyLatest()->first()->upl_date)[1] }}</p>
</div>
<div class="media-body">
  <h4 class="mt-0"><a href="#">{{ $p1->judul }}</a></h4>
  <p>
    <a class="btn btn-info" style="color:white;padding : 2px 10px !important;">{{ ucfirst($p1->jenis) }}</a>
    <a class="btn btn-success" style="color:white;padding : 2px 10px !important;">{{ ucfirst($p1->bidang) }}</a>
  </p>
  <p>Nama Kelompok : {{ $p1->kelompok->nama_kel }}</p>
  <p>Nama Jurusan : {{ $p1->kelompok->kelas->jurusan->nama }}</p>
  <p>Nama Anggota :</p>
  @foreach ($p1->kelompok->mhs()->get() as $kel)
  <p>- [{{ $kel->nomor }}] {{ $kel->nama }}</p>
  @endforeach
  <div class="meta-bottom d-flex justify-content-between">

  </div>
</div>
</div>
@endforeach

</div>
<div class="col-lg-6 travel-right">
  @foreach ($prop2 as $p2)
  <div class="single-travel media pb-70">
    <img class="img-fluid d-flex  mr-3" src="{{asset("$p2->banner")}}" alt="" style="width:200px;height:300px;">
    <div class="dates">
      <span>{{ explode(" ",$p2->historyLatest()->first()->upl_date)[0] }}</span>
      <p>{{ explode(" ",$p2->historyLatest()->first()->upl_date)[1] }}</p>
    </div>
    <div class="media-body">
      <h4 class="mt-0"><a href="#">{{ $p2->judul }}</a></h4>
      <p>
        <a class="btn btn-info" style="color:white;padding : 2px 10px !important;">{{ ucfirst($p2->jenis) }}</a>
        <a class="btn btn-success" style="color:white;padding : 2px 10px !important;">{{ ucfirst($p2->bidang) }}</a>
      </p>
      <p>Nama Kelompok : {{ $p2->kelompok->nama_kel }}</p>
      <p>Nama Jurusan : {{ $p2->kelompok->kelas->jurusan->nama }}</p>
      <p>Nama Anggota :</p>
      @foreach ($p2->kelompok->mhs()->get() as $kel)
      <p>- [{{ $kel->nomor }}] {{ $kel->nama }}</p>
      @endforeach
      <div class="meta-bottom d-flex justify-content-between">

      </div>
    </div>
  </div>
  @endforeach

</div>
<a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a>
</div>
</div>
</section> --}}
<!-- End travel Area -->


@endsection