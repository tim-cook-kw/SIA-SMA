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
}
