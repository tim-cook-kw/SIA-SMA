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

    public function materi(Request $request)
    {
      DB::table('materi')->insert([
        'nama_guru'=> $request->namaguru,
        'materi'=> $request->materi,

      ]);
      return redirect()->back();
    }
    public function get_materi()
    {
        $materi = DB::table('materi')->get();
        return view('akademik.materi',compact('materi'));
    }
    public function hapus_materi($id)
    {
       $db = DB::table('materi')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_materi(Request $request)

    {
         DB::table('materi')->where('id',$request->id)->update([
            'nama_guru'=> $request->namaguru,
            'materi'=> $request->materi,
         ]);
        return redirect()->back();
    }


    public function kelola_kelas(Request $request)
    {
      DB::table('kelas')->insert([
        'nama_siswa'=> $request->nama_siswa,
        'class_name'=> $request->class_name,
        'nama_guru'=> $request->nama_guru,
        'tahun_ajaran'=> $request->tahun_ajaran,

      ]);
      return redirect()->back();
    }
    public function get_kelola_kelas()
    {
        $kelola_kelas = DB::table('kelas')->get();
        return view('akademik.kelola_kelas',compact('kelola_kelas'));
    }
    public function hapus_kelola_kelas($id)
    {
       $db = DB::table('kelas')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_kelola_kelas(Request $request)

    {
         DB::table('kelas')->where('id',$request->id)->update([
            'nama_siswa'=> $request->namasiswa,
            'class_name'=> $request->classname,
            'nama_guru'=> $request->namaguru,
            'tahun_ajaran'=> $request->tahunajaran,
         ]);
        return redirect()->back();
    }
    public function tambah_siswa(Request $request)
    {
      DB::table('tambah_siswa')->insert([
        'nama_siswa'=> $request->nama_siswa,
        'nis'=> $request->nis,
        'nama_kelas'=> $request->nama_kelas,
        'tahun_ajaran'=> $request->tahun_ajaran,

      ]);
      return redirect()->back();
    }
    public function get_tambah_siswa()
    {
        $tambah_siswa = DB::table('tambah_siswa')->get();
        return view('akademik.tambah_siswa',compact('tambah_siswa'));
    }
    public function hapus_tambah_siswa($id)
    {
       $db = DB::table('tambah_siswa')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_tambah_siswa(Request $request)

    {
         DB::table('tambah_siswa')->where('id',$request->id)->update([
        'nama_siswa'=> $request->nama_siswa,
        'nis'=> $request->nis,
        'nama_kelas'=> $request->nama_kelas,
        'tahun_ajaran'=> $request->tahun_ajaran,

         ]);
        return redirect()->back();
    }

    public function kelola_nilai(Request $request)
    {
      DB::table('laporan_nilai')->insert([
        'nama_siswa'=> $request->nama_siswa,
        'nis'=> $request->nis,
        'nama_kelas'=> $request->nama_kelas,
        'tahun_ajaran'=> $request->tahun_ajaran,

      ]);
      return redirect()->back();
    }
    public function get_kelola_nilai()
    {
        $kelola_nilai= DB::table('laporan_nilai')->get();
        return view('akademik.kelola_nilai',compact('kelola_nilai'));
    }
    public function hapus_kelola_nilai($id)
    {
       $db = DB::table('laporan_nilai')->where('id',$id);
       $db->delete();
       return redirect()->back();
    }
    public function update_kelola_nilai(Request $request)

    {
         DB::table('laporan_nilai')->where('id',$request->id)->update([
        'nama_siswa'=> $request->nama_siswa,
        'nis'=> $request->nis,
        'nama_kelas'=> $request->nama_kelas,
        'tahun_ajaran'=> $request->tahun_ajaran,

         ]);
        return redirect()->back();
    }
}



