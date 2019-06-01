<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function jadwal_guru(Request $request)
    {
      DB::table('jadwal_guru')->insert([
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
    public function get_jadwal_guru()
    {
        $jadwal_guru = DB::table('jadwal_guru')->get();
        return view('akademik.jadwal_guru',compact('jadwal_guru'));
    }
    public function hapus_jadwal_guru($id)
    {
       $db = DB::table('jadwal_guru')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_jadwal_guru(Request $request)

    {
         DB::table('jadwal_guru')->where('id',$request->id)->update([
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
