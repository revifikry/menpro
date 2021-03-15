<aside class="main-sidebar">
  @php
  $path = Request::path();
  $isAda = '';
  if(auth()->guard("web")->check()){

  $mhs =auth()->guard("web")->user()->id;
  $dtKel = \DB::table("detail_kelompok")->where("id_user",$mhs);

  $isAda = $dtKel->exists();

  if($isAda){
  $dtKel = $dtKel->first();
  // $kelompok = App\Kelompok::find($dtKel->id_kelompok);
  // dd($kelompok->mhs()->get());
  }
  }
  @endphp
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <div class="img-circle" alt="User Image" style="margin-left:-5px;font-weight:bold;font-size:20px;color:white;background: #222d32;border:3px solid #fff;border-radius:50%;padding:3px 12px;">{{ strtoupper(Auth::guard($grd)->user()->nama[0]) }}</div>
      </div>
      <div class="pull-left info">
        <p>{{ Auth::guard($grd)->user()->nama }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> --}}
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ url("/") }}"><i class="fa fa-home"></i> <span>Home </span></a></li>
      <li><a href="{{ url("proposal") }}"><i class="fa fa-file"></i> <span>Semua Proposal </span></a></li>
      @if(Auth::user()->role == 4)
      <li><a href="{{ route("regis") }}"><i class="fa fa-users"></i> <span>Kelompok </span></a></li>
      @if($isAda)
      <li><a href="{{ route("uplProposal") }}"><i class="fa fa-file"></i> <span>Upload Proposal</span></a></li>
      <li><a href="{{ route("uplBanner") }}"><i class="fa fa-image"></i> <span>Banner & Bussiness Canvas</span></a></li>
      @else
      <li><a href="#" onclick="alert('Belum Input Data Kelompok')"><i class="fa fa-file"></i> <span>Upload Proposal</span></a></li>
      <li><a href="#" onclick="alert('Belum Input Data Kelompok')"><i class="fa fa-image"></i> <span>Banner & Bussiness Canvas</span></a></li>
      @endif
      @elseif(Auth::user()->role == 2)
      <li><a href="{{ url("koordb") }}"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
      <li><a href="{{ route("createPengumuman") }}"><i class="fa fa-bullhorn"></i> <span>Buat Pengumuman</span></a></li>

      @elseif(Auth::user()->role == 1)
      <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
      <li><a href="{{ route("manage_jurusan") }}"><i class="fa fa-building"></i> <span>Setting Jurusan</span></a></li>
      <li><a href="{{ route("tahunajaran") }}"><i class="fa fa-clock-o"></i> <span>Setting Tahun Ajaran</span></a></li>
      <li><a href="{{ route("setDosen") }}"><i class="fa fa-user"></i> <span>Dosen</span></a></li>
      <li><a href="{{ route("setUser") }}"><i class="fa fa-user"></i> <span>Setting User</span></a></li>
      <li><a href="{{ route("setKelas") }}"><i class="fa fa-hourglass-half"></i> <span>Setting Kelas</span></a></li>
      <li><a href="{{ url("setKoor") }}"><i class="fa fa-user"></i> <span>Setting Team Koordinator</span></a></li>
      <li><a href="{{ route("createKegiatan") }}"><i class="fa fa-user"></i> <span>Setting Kegiatan</span></a></li>
      @elseif(Auth::user()->role == 3)
      <li><a href="{{ url("dosendb") }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="{{ route("dataKelompok") }}"><i class="fa fa-users"></i> <span>Data Kelompok & Kelas</span></a></li>
      <li><a href="{{ route("materikuliah") }}"><i class="fa fa-users"></i> <span>Materi Kuliah</span></a></li>
      @elseif(Auth::user()->role == 6)
      <li><a href="{{ url("rektordb") }}"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
      @endif

      {{-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> --}}
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>