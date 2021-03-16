@extends('layouts.landing')

@section('content')
<style>
    .cHide {
        display: none;
    }
</style>
<!-- End banner Area -->


<!-- Start category Area -->


<section class="team-area section-gap" id="team" style="padding-top:40px !important;">
    <div class="container" id="app">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Exhibition</h1>
                    <p></p>
                    <div class="text-left" style="padding-top:0px;width : 30%;position: absolute;right:-360px;top:100px;">

                        <div class="input-group">
                            <input type="text" class="form-control" v-model="search" @keyup.enter="reloc()" placeholder="Cari judul proposal">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" @click="reloc()" style="border:1px solid #ccc;cursor :pointer;"><i class="fa fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                        <span style="padding-left:10px; color: blue;text-decoration:underline;cursor:pointer;" @click="advS++"> Advanced Search</span>
                        <div class="advsrc">

                            <div class="col-md-12 text-left" style="">

                                <div class="form-group">
                                    <label>Filter Jenis</label>
                                    <select class="error form-control" v-model="jenis" placeholder="Jenis">
                                        <option value="0">Semua</option>
                                        <option value="jasa">Jasa</option>
                                        <option value="produk">Produk</option>
                                    </select>
                                </div><!-- /input-group -->

                            </div>

                            <div class="col-md-12 text-left" style="">

                                <div class="form-group">
                                    <label>Filter Bidang</label>
                                    <select class="error form-control" v-model="bidang" placeholder="Bidang">
                                        <option value="0">Semua</option>
                                        <option value="informatika">Informatika</option>
                                        <option value="life style">Life style</option>
                                        <option value="elektronika">Elektronika</option>
                                        <option value="kuliner">Kuliner</option>
                                        <option value="agrobisnis">Agrobisnis</option>
                                    </select>
                                </div><!-- /input-group -->

                            </div>

                            <div class="col-md-12 text-left" style="">

                                <div class="form-group">
                                    <label>Order By Like</label>
                                    <select class="error form-control" v-model="likeds" placeholder="Jenis">
                                        <option value="">Default</option>
                                        <option value="mostliked=desc">Dari Paling Tinggi</option>
                                        <option value="mostliked=asc">Dari Paling Rendah</option>
                                    </select>
                                </div><!-- /input-group -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-12">

            <div class="row">
                {{-- <div class="col-md-3" style="">
               
                <div class="form-group">
                  <label>Filter Jurusan</label>
                  <select class="form-control"></select>
                </div><!-- - /input-group -->
                
              </div> --}}


                <div class="col-md-3 text-left" style="">

                    <div class="form-group">
                        <label>Filter Jurusan</label>
                        <select class="error form-control" v-model="jurusan" placeholder="jurusan">

                            <option value="0">Semua</option>
                            @foreach (App\Jurusan::all() as $jur)
                            <option value="{{ $jur->id }}">{{ $jur->nama }}</option>
                            @endforeach
                        </select>
                    </div><!-- /input-group -->

                </div>

            </div>
            @if($prop2->isEmpty())
            <div class="row text-center" style="padding-top:50px;">
                <h3>Belum ada data</h3>
            </div>
            @else
            <div class="text-center feature-head">
                <center>
                    <h1>Daftar Proposal</h1>
                </center>

                <div class="row" style="padding-top:50px;">
                </div>
                <div class="container">
                    <div class="row">


                        <a href="https://www.rubin.id/daftar-rubin.html">
                            @foreach ($prop2 as $p2)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <center>
                                            <h4 class="mt-0" style="margin-bottom: 20px;"><a href="#" onclick="window.location = '{{ url("proposalview/$p2->id") }}'">{{ $p2->judul }}</a></h4>
                                        </center>
                                    </div>
                                    <div class="card-body" style=" background-color: #f4f4f4;">
                                        <center>
                                            <img class="" src="{{asset("$p2->banner")}}" alt="" style="width:200px;height:300px;" onclick="window.location = '{{ url("proposalview/$p2->id") }}'">

                                        </center>
                                    </div>
                                    <div class="card-body" style=" background-color: #f4f4f4;">
                                        <center>
                                            Kategori
                                        </center>
                                    </div>
                                    <div class="card-footer ">
                                        <center>
                                            <p class="pad">
                                            <p>
                                                <a class="btn btn-info" style="color:white;padding : 2px 10px !important;">{{ ucfirst($p2->jenis) }}</a>
                                                <a class="btn btn-success" style="color:white;padding : 2px 10px !important;">{{ ucfirst($p2->bidang) }}</a>
                                            </p>
                                            <p>
                                                <span class="btn btn-primary" style="color:white !important;padding : 2px 10px !important;cursor:pointer;font-size:14px;"> <i class="fa fa-thumbs-up" style="color:white !important;"></i> <b style="color:white !important;" id="pr{{$p2->id}}">{{$p2->like_count}}</b> Disukai</span>
                                            </p>
                                            </p>
                                            <p class="pad">
                                                <tr>
                                                    <td width=210><b> Kelompok:</b><br> {{ $p2->kelompok->nama_kel }}</td>
                                                    @if(\Auth::check())
                                                    @if( Auth::user( )->role == '4' || Auth::user( )->role == '5')
                                                    <td width=30 class="text-center">
                                                        <span id="pr{{ $p2->id }}like" class="btn btn-primary @if($p2->is_liked) cHide @endif" style="color:white !important;padding : 2px 10px !important;cursor:pointer; font-size:12px;" @click="like({{ $p2->id }})"> <i class="fa fa-thumbs-up" style="color:white !important;"></i> Suka</span>
                                                        <i id="pr{{ $p2->id }}spin" class="fa fa-spinner fa-spin cHide"></i>
                                                        <span id="pr{{ $p2->id }}unlike" class="btn btn-danger @if(!$p2->is_liked) cHide @endif" style="color:white !important;padding : 2px 10px !important;cursor:pointer; font-size:12px;" @click="unlike({{ $p2->id }})"> <i class="fa fa-thumbs-down" style="color:white !important;"></i> Batal Suka</span>
                                                    </td>
                                                    @endif
                                                    @endif
                                                    {{-- <td><b> Anggota:</b><br>
                          @foreach ($p2->kelompok->mhs()->get() as $kel)
                            {{ $kel->nama }},
                                                    @endforeach
                                                    </td> --}}
                                                </tr>
                                            </p>
                                            <p class="pad">
                                                <tr>
                                                    <td width=210><b> Jurusan:</b><br> {{ $p2->kelompok->kelas->jurusan->nama }} </td>
                                                    @if(\Auth::check())
                                                    @if( Auth::user( )->role == '4' || Auth::user( )->role == '5')
                                                    <td width=30 class="text-center">
                                                        <span id="pr{{ $p2->id }}like" class="btn btn-primary @if($p2->is_liked) cHide @endif" style="color:white !important;padding : 2px 10px !important;cursor:pointer; font-size:12px;" @click="like({{ $p2->id }})"> <i class="fa fa-thumbs-up" style="color:white !important;"></i> Suka</span>
                                                        <i id="pr{{ $p2->id }}spin" class="fa fa-spinner fa-spin cHide"></i>
                                                        <span id="pr{{ $p2->id }}unlike" class="btn btn-danger @if(!$p2->is_liked) cHide @endif" style="color:white !important;padding : 2px 10px !important;cursor:pointer; font-size:12px;" @click="unlike({{ $p2->id }})"> <i class="fa fa-thumbs-down" style="color:white !important;"></i> Batal Suka</span>
                                                    </td>
                                                    @endif
                                                    @endif
                                                    {{-- <td><b> Anggota:</b><br>
                          @foreach ($p2->kelompok->mhs()->get() as $kel)
                            {{ $kel->nama }},
                                                    @endforeach
                                                    </td> --}}
                                                </tr>
                                            </p>
                                        </center>
                                    </div>
                                </div>
                                <br />
                            </div>
                            @endforeach
                        </a>

                    </div>

                </div>


            </div>
            <br />
            <div class="row">
                <div class="col-md-4" style="margin: 0 auto;">

                    {{ $prop2->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
    </div>
</section>
@endsection

@section("script")
<script src="{{ asset("dist/js/axios.js") }}"></script>
<script>
    $(".advsrc").hide();
    var app = new Vue({
        el: '#app',
        data: {
            jenis: '{{ $jenis }}',
            jurusan: '{{ $jurusan }}',
            advS: 1,
            bidang: '{{ $bidang }}',
            likeds: '',
            search: '{{ (!is_null($search))? "$search" : ""}}',
        },
        methods: {
            reloc: function() {
                // console.log("{{ url('proposal') }}/"+this.jurusan+"/"+this.jenis+"/"+this.bidang+"/"+this.search)
                window.location = "{{ url('proposal') }}/" + this.jurusan + "/" + this.jenis + "/" + this.bidang + "/" + this.search + "?" + this.likeds
            },
            like: function(id) {
                $("#pr" + id + "like").addClass("cHide")
                $("#pr" + id + "spin").removeClass("cHide")
                axios.post('{{ url("like") }}', {
                        proposal_id: id
                    })
                    .then(function(response) {
                        console.log(response.data.data.like_count)
                        $("#pr" + id).html(response.data.data.like_count)
                        $("#pr" + id + "spin").addClass("cHide")
                        $("#pr" + id + "unlike").removeClass("cHide")
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
            },
            unlike: function(id) {
                $("#pr" + id + "unlike").addClass("cHide")
                $("#pr" + id + "spin").removeClass("cHide")
                axios.post('{{ url("unlike") }}', {
                        proposal_id: id
                    })
                    .then(function(response) {
                        console.log(response.data.data.like_count)
                        $("#pr" + id).html(response.data.data.like_count)
                        $("#pr" + id + "spin").addClass("cHide")
                        $("#pr" + id + "like").removeClass("cHide")
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
            }
        },
        watch: {
            jenis: function() {
                this.reloc();
            },
            bidang: function() {
                this.reloc();
            },
            jurusan: function() {
                this.reloc();
            },
            likeds: function() {
                this.reloc();
            },
            advS: function() {
                if (this.advS % 2 == 0) {
                    $(".advsrc").show();
                } else {
                    $(".advsrc").hide();
                }
            }
        },

    })
</script>
@endsection