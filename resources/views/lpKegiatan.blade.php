@extends('layouts.landing')
@section('content')
<div class="text-center feature-head">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <center>
        <h1>Kegiatan</h1>
    </center>

    <div class="row" style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <a href="https://www.rubin.id/daftar-rubin.html">
                    @if($keg->isEmpty())
                    <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada Kegiatan </h3>
                    @else
                    @foreach ($keg as $g)

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h4><a href="{{url("/news/".$g->id)}}">{{ $g->judul }}</a></h4>
                                </center>
                            </div>
                            <div class="card-body" style=" background-color: #f4f4f4;">
                                <center>
                                    <img src="{{asset("$g->thumbnail")}}" alt="" style="width:200px;height:300px;">
                                </center>
                            </div>
                            <div class="card-footer ">
                                <center>
                                    <p class="pad">
                                    <p class="date">{{ $g->upl_date }}</p>

                                    </p>
                            </div>
                            @endforeach

                        </div>
                        @endif
                </a>
                <br />
                <br />
            </div>

        </div>
    </div>
</div>