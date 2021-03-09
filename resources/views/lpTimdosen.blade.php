@extends('layouts.landing')

@section('content')
<!-- Start team Area -->

<section class="team-area section-gap" id="team">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Team Koordinator Kewirausahaan</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row align-item-center d-flex justify-content-center">
            <div class="col-lg-6 team-left">
                {!! App\KoorText::find(1)->content !!}
            </div>
            <div class="col-lg-6 team-right d-flex justify-content-center">
                <div class="row active-team-carusel">
                    @foreach (App\KoorFoto::all() as $k => $v)

                    <div class="single-cat">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset("$v->file")}}" alt="" style="width: 240px;height:240px;">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>{{ $v->name }}</h4>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection