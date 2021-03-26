<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Dosen;
use App\Kelas;
use DataTables;
use App\Jurusan;
use App\KoorFoto;
use App\KoorText;
use App\TahunAjaran as TA;
use App\Kegiatan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addJurusan(Request $req)
    {
        $validatedData = $req->validate([
        'nama' => 'required',
            'semester_aktif' => 'required',
        ]);

        $j = new Jurusan();
        $j->nama = $req->nama;
        $j->semester_aktif = $req->semester_aktif;
        $j->save();

        return $this->setResponse($j);
    }

    public function addKegiatan(Request $req)
    {
        $validatedData = $req->validate([
            'isi' => 'required',
            'judul' => 'required',
        ]);
        $fName = "blog/img/itens.jpg";
        if($req->hasFile("file")){
            $fName = time().'_'.$req->file->getClientOriginalName();
            $req->file->move(public_path('upload'), $fName);
            $fName = "upload/".$fName;
        }

        $inp = new Kegiatan();
        $inp->thumbnail = $fName;
        $inp->isi = $req->isi;
        $inp->judul = $req->judul;
        $inp->id_user = Auth::user()->id;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function getKegiatan()
    {
        $data = Kegiatan::all();

        return DataTables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
   
                                $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
    }

    public function editJurusan(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'nama' => 'required',
            'semester_aktif' => 'required',
        ]);
        // dd($req->all());
        $j = Jurusan::find($req->id);
        $j->nama = $req->nama;
        $j->semester_aktif = $req->semester_aktif;
        $j->save();

        return $this->setResponse($j);
    }

    public function deleteJurusan(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = Jurusan::find($req->id);
        $j->delete();

        return $this->setResponse($j);
    }

    public function jurusanData()
    {
        $jur = Jurusan::all();

        return DataTables::of($jur)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
   
                                $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
    }

    #
    #
    # TAHUN AJARAN
    #
    #

    public function addTAjaran(Request $req)
    {
        $validatedData = $req->validate([
            'tahun' => 'required',
            'semester' => 'required',
            'isActive' => 'required',
        ]);

        if(TA::where("tahun",$req->tahun)->where("semester",$req->semester)->exists()){
            return $this->setResponse(["error" => ["Data sudah pernah ditambahkan !"]],400);
        }
        

        if($req->isActive == 1){
            DB::table("tahun_ajaran")->update(["isActive" => 0]);
        }

        $inp = new TA();
        $inp->tahun = $req->tahun;
        $inp->semester = $req->semester;
        $inp->isActive = $req->isActive;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editTAjaran(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
        ]);
        // dd($req->all());
        DB::table("tahun_ajaran")->update(["isActive" => 0]);

        $inp = TA::find($req->id);
        $inp->isActive = 1;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function deleteTAjaran(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = TA::find($req->id);
        $j->delete();

        return $this->setResponse($j);
    }

    public function tajaranData()
    {
        $jur = TA::orderBy("isActive","desc")->get();

        return DataTables::of($jur)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
                                $btn = "";

                                if($row->isActive == 0){
                                    $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-info btn-sm"><i class="fa fa-check"></i> Set Aktif</a>';
                                }
                                else{
                                    $btn = '<button class="edit btn btn-default btn-sm" disabled><i class="fa fa-check"></i> Set Aktif</button>';
                                }

                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->addColumn('isActIco', function($row){
                                if($row->isActive == 1){
                                    $btn = '<span class="label label-success"><i class="fa fa-check"></i> Aktif </span>';
                                }
                                else{
                                    $btn = '<span class="label label-warning"> <i class="fa fa-times"></i> Tidak Aktif </span>';
                                }
          
                                 return $btn;
                            })
                            ->rawColumns(['action','isActIco'])
                            ->make(true);
    }

    /**
     * 
     *  KELAS
     * 
     */

    public function addKelas(Request $req)
    {
        $validatedData = $req->validate([
            'tahun' => 'required',
            'jurusan' => 'required',
            'dosen' => 'required',
            'kelas' => 'required',
        ]);

        if(Kelas::where("kelas",$req->kelas)->where("id_jurusan",$req->jurusan)->where("id_tahunajaran",$req->tahun)->exists()){
            return $this->setResponse(["error" => ["Data sudah pernah ditambahkan !"]],400);
        }

        $inp = new Kelas();
        $inp->id_jurusan = $req->jurusan;
        $inp->id_user = $req->dosen;
        $inp->id_tahunajaran = $req->tahun;
        $inp->kelas = $req->kelas;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editKelas(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'tahun' => 'required',
            'jurusan' => 'required',
            'dosen' => 'required',
            'kelas' => 'required',
        ]);

        if(Kelas::where("kelas",$req->kelas)->where("id_jurusan",$req->jurusan)->where("id_tahunajaran",$req->tahun)->exists()){
            return $this->setResponse(["error" => ["Data sudah pernah ditambahkan !"]],400);
        }

        $inp = Kelas::find($req->id);
        $inp->id_jurusan = $req->jurusan;
        $inp->id_user = $req->dosen;
        $inp->id_tahunajaran = $req->tahun;
        $inp->kelas = $req->kelas;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function deleteKelas(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = Kelas::find($req->id);
        $j->delete();

        return $this->setResponse($j);
    }

    public function kelasData()
    {
        $ta = TA::where("isActive",1)->first();

        $jur = Kelas::where("id_tahunajaran",$ta->id)->orderBy("id_jurusan","desc")->orderBy("kelas","asc")->get();

        return DataTables::of($jur)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){

                                $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';

                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->addColumn('dosen_name', function($row){
                                return $row->dosen->nama;
                            })
                            ->addColumn('tahunAj', function($row){
                                return $row->tahun->tahun." - ".$row->tahun->semester_act;
                            })
                            ->addColumn('jurusan_name', function($row){
                                return $row->jurusan->nama;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
    }

    
    /**
     * 
     *  DOSEN
     * 
     */

    public function addDosen(Request $req)
    {
        $validatedData = $req->validate([
            'nama' => 'required',
            'nid' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $inp = new User();
        $inp->nama = $req->nama;
        $inp->nomor = $req->nid;
        $inp->email = $req->email;
        $inp->username = $req->username;
        $inp->password = bcrypt($req->password);
        $inp->role = $req->role;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function addUserUmum(Request $req)
    {
        $validatedData = $req->validate([
            'nama' => 'required',
            'nid' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $inp = new User();
        $inp->nama = $req->nama;
        $inp->nomor = $req->nid;
        $inp->email = $req->email;
        $inp->username = $req->username;
        $inp->password = bcrypt($req->password);
        $inp->role = $req->role;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editUserUmum(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'nid' => 'required|numeric',
            'email' => 'required|email',
            'username' => 'required',
            'role' => 'required',
        ]);

        $inp = UserUmum::find($req->id);
        $inp->nama = $req->nama;
        $inp->nomor = $req->nid;
        $inp->email = $req->email;
        $inp->username = $req->username;
        if($req->has("password")){
            $inp->password = bcrypt($req->password);
        }
        $inp->role = $req->role;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editDosen(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'nid' => 'required|numeric',
            'email' => 'required|email',
            'username' => 'required',
            'role' => 'required',
        ]);

        $inp = User::find($req->id);
        $inp->nama = $req->nama;
        $inp->nomor = $req->nid;
        $inp->email = $req->email;
        $inp->username = $req->username;
        if($req->has("password")){
            $inp->password = bcrypt($req->password);
        }
        $inp->role = $req->role;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function deleteUserUmum(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = UserUmum::find($req->id);
        $j->delete();

        return $this->setResponse($j);
    }

    public function deleteDosen(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = User::find($req->id);
        $j->delete();

        return $this->setResponse($j);
    }

    public function dosenData()
    {
        $dos = User::where("role","!=","4")->orderBy("nama","asc")->get();

        return DataTables::of($dos)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){

                                $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';

                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
    }

    public function addUser(Request $req)
    {
        $validatedData = $req->validate([
            'nama' => 'required',
            'nid' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $inp = new User();
        $inp->nama = $req->nama;
        $inp->nomor = $req->nid;
        $inp->email = $req->email;
        $inp->username = $req->username;
        $inp->password = bcrypt($req->password);
        $inp->role = $req->role;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editUser(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'nid' => 'required|numeric',
            'email' => 'required|email',
            'username' => 'required',
            'role' => 'required',
        ]);

        $inp = User::find($req->id);
        $inp->nama = $req->nama;
        $inp->nomor = $req->nid;
        $inp->email = $req->email;
        $inp->username = $req->username;
        if($req->has("password")){
            $inp->password = bcrypt($req->password);
        }
        $inp->role = $req->role;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function deleteUser(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = User::find($req->id);
        $j->delete();

        return $this->setResponse($j);
    }

    public function userData()
    {
        $dos = User::where("role","=","4")->orderBy("nama","asc")->get();

        return DataTables::of($dos)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){

                                $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';

                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->addColumn('jurusan', function($row){
                                 $jur = substr($row->nomor,0,2);
                                 $j = Jurusan::find($jur);
                                 return is_null($j)? '' : $j->nama;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
    }

    /**
     * 
     *  KOOR
     * 
     */

    public function addKoor(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'file2' => 'required|mimes:png,jpg,jpeg|max:10240',
        ]);

        $inp = new KoorFoto();
        
        $fName = time().'_'.$req->file2->getClientOriginalName();
        $req->file2->move(public_path('upload'), $fName);
        $inp->name = $req->name;
        $inp->file = "upload/".$fName;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editKoor(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $inp = KoorFoto::find($req->id);
        if($req->hasFile("file2")){
            $fName = time().'_'.$req->file2->getClientOriginalName();
            $req->file2->move(public_path('upload'), $fName);
            if(file_exists(public_path("/").$inp->file)){
                @unlink(public_path("/").$inp->file);
            }
           
            $inp->file = "upload/".$fName;
        }

        $inp->name = $req->name;
        $inp->save();

        return $this->setResponse($inp);
    }

    public function editKoorText(Request $req)
    {
        $validatedData = $req->validate([
            'deskripsi' => 'required',
        ]);

        $inp = KoorText::find(1);
        $inp->content = $req->deskripsi;

        $inp->save();

        return $this->setResponse($inp);
    }

    public function deleteKoor(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required'
        ]);
        // dd($req->all());
        $j = KoorFoto::find($req->id);
        if(file_exists(public_path("/").$j->file)){
            @unlink(public_path("/").$j->file);
        }
        $j->delete();

        return $this->setResponse($j);
    }

    public function koorData()
    {
        $dos = KoorFoto::all();

        return DataTables::of($dos)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){

                                $btn = '<a onclick="editDt('.$row->id.')" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';

                                $btn .= '&emsp;<a onclick="deleteDt('.$row->id.')" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>';
          
                                 return $btn;
                            })
                            ->addColumn('foto',function($row){
                                return "<img src='".asset("$row->file")."' style='width:200px;'>";
                            })
                            ->rawColumns(['action','foto'])
                            ->make(true);
    }
    
    /**
     * 
     *  DATA PROVIDER
     * 
     */

    public function getJurusanActive()
    {
        $ta = TA::where("isActive",1)->first();

        $jur = Jurusan::select("id","nama as text")->where("semester_aktif",$ta->semester)->get();

        return $this->setResponse($jur);
    }

    public function getDosen()
    {
        // $ta = TA::where("isActive",1)->first();

        $jur = User::where("role",3)->get();

        foreach($jur as &$j){
            $j->text = "[$j->nomor] $j->nama";
        }

        return $this->setResponse($jur);
    }

    public function getKelas()
    {
        $jur = substr(auth()->guard("web")->user()->nomor,0,2);

        $ta = TA::where("isActive",1)->first();

        $kelas = Kelas::where("id_tahunajaran",$ta->id)->where("id_jurusan",$jur)->orderBy("id_jurusan","desc")->orderBy("kelas","asc")->get();

        foreach($kelas as &$j){
            $j->text = $j->jurusan->nama." [$j->kelas]";
        }

        return $this->setResponse($kelas);
    }

    public function getMhs()
    {
        $jur = substr(auth()->guard("web")->user()->nomor,0,2);

        $ta = TA::where("isActive",1)->first();

        $mhs = User::where("id","!=",Auth::user()->id)
                    ->where("nomor","like","$jur%")
                    ->whereNotIn('id',function($query) {
                            $query->select('id_user')->from('detail_kelompok');
                    })
                    ->where("role",4)
                    ->orderBy("nomor","desc")->get();

        foreach($mhs as &$j){
            $j->text = $j->nama." [$j->nomor]";
        }

        return $this->setResponse($mhs);
    }


  
}
