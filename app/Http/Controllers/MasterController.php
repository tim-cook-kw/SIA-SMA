<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function Kepegawaian(Request $request)
    {
      DB::table('kepegawaian')->insert([
        'role_id'=> $request->hak_akses,
        'nip'=> $request->nip,
        'name'=> $request->nama,
        'birth_date'=> $request->birth_date,
        'address'=> $request->alamat,
        'phone' =>$request->telp,
        'image' =>$request->foto,
        'gender' =>$request->gender,
        'religion' =>$request->agama,
        'position' =>$request->position
      ]);
      return redirect()->back();
    }
    public function get_kepegawaian()
    {
        $kepegawaian = DB::table('kepegawaian')->get();
        return view('master.kepegawaian',compact('kepegawaian'));
    }
    public function hapus_kepegawaian($id)
    {
       $db = DB::table('kepegawaian')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_kepegawaian(Request $request)

    {
         DB::table('kepegawaian')->where('id',$request->id)->update([
            'role_id'=> $request->hak_akses,
            'nip'=> $request->nip,
            'name'=> $request->nama,
            'birth_date'=> $request->birth_date,
            'address'=> $request->alamat,
            'phone' =>$request->telp,
            'image' =>$request->foto,
            'gender' =>$request->gender,
            'religion' =>$request->agama,
            'position' =>$request->position
         ]);
        return redirect()->back();
    }
    public function Kesiswaan(Request $request)
{
    DB::table('kesiswaa')->insert([
        'id_parent'=> $request->hak_akses,
        'nis'=> $request->nis,
        'name'=> $request->nama,
        'birth_date'=> $request->birth_date,
        'gender' =>$request->gender,
        'address'=> $request->alamat,
        'phone' =>$request->telp,
        'tahun_masuk' =>$request->tahun_masuk,
        'religion' =>$request->agama,
        'origin_of_school' =>$request->origin_of_school,
        'image' =>$request->image,
      ]);
      return redirect()->back();
    }
    public function get_Kesiswaan(Request $request)
    {
        $kesiswaa = DB::table('kesiswaa')->get();
        return view('master.kesiswaan',compact('kesiswaa'));
    }
    public function hapus_kesiswaan($id)
    {
        $db = DB::table('kesiswaa')->where('id',$id);
        $db->delete();
        return redirect()->back();
    }
    public function update_kesiswaan(Request $request)

    {
         DB::table('kesiswaa')->where('id',$request->id)->update([
            'role_id'=> $request->hak_akses,
            'nip'=> $request->nip,
            'name'=> $request->nama,
            'birth_date'=> $request->birth_date,
            'address'=> $request->alamat,
            'phone' =>$request->telp,
            'image' =>$request->foto,
            'gender' =>$request->gender,
            'religion' =>$request->agama,
            'position' =>$request->position
         ]);
        return redirect()->back();
    }
    public function mata_pelajaran(Request $request)
    {
      DB::table('mata_pelajaran')->insert([
        'nama_pelajaran'=> $request->nama_pelajaran,
        'nama_guru'=> $request->nama,
      ]);
      return redirect()->back();
    }
    public function get_mata_pelajaran()
    {
        $mata_pelajaran = DB::table('mata_pelajaran')->get();
        return view('master.mata_pelajaran',compact('mata_pelajaran'));
    }
    public function hapus_mata_pelajaran($id)
    {
       $db = DB::table('mata_pelajaran')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_mata_pelajaran(Request $request)

    {
         DB::table('mata_pelajaran')->where('id',$request->id)->update([
            'nama_pelajaran'=> $request->nama_pelajaran,
            'nama_guru'=> $request->nama,

         ]);
        return redirect()->back();
    }

}

