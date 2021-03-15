@extends('layouts.landing')

@section('content')
<!-- Start category Area -->
<div class="text-center feature-head">
    <br />
    <br />
    <br />
    <br />
    <center>
        <h1>Materi Kuliah</h1>
    </center>

    <div class="row" style="padding-top:50px;">
    </div>
    <div class="container">
        <div class="row">
            <a href="https://www.rubin.id/daftar-rubin.html">
                @if($kuliah->isEmpty())
                <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada pengumuman </h3>
                @else
                @foreach ($kuliah as $p)

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <center>
                                <h4><a href="{{url("/materi/".$p->id)}}">{{ $p->judul }}</a></h4>
                            </center>
                        </div>
                        <div class="card-body" style=" background-color: #f4f4f4;">
                            <center>
                                <img src="{{asset("$p->thumbnail")}}" alt="" style="width:200px;height:300px;">
                            </center>
                        </div>
                        <div class="card-footer ">
                            <center>
                                <p class="pad">
                                <p class="date">{{ $p->upl_date }}</p>

                                </p>
                        </div>




                    </div>
                </div>
                @endforeach
                @endif

            </a>
            <br />
            <br />
        </div>

    </div>
</div>
<!-- End category Area -->

@endsection