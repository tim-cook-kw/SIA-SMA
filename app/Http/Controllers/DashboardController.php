<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function News(Request $request)
    {
        DB::table('news')->insert([

            'nama'=> $request->nama,
            'description'=> $request->description,
            'image' =>$request->image,
        ]);
        return redirect()->back();
    }
    public function get_news(Request $request)
    {
        $news = DB::table('news')->get();
        return view('dashboard.news',compact('news'));
    }
    public function hapus_news($id)
    {
        $db = DB::table('news')->where('id',$id);
        $db->delete();
        return redirect()->back();
    }
    public function update_News(Request $request)
    {
        DB::table('news')->where('id',$request->id)->update([

            'nama'=> $request->nama,
            'description'=> $request->description,
            'image' =>$request->image,
        ]);
        return redirect()->back();
    }
    public function Program(Request $request)
    {
        DB::table('program')->insert([

            'nama'=> $request->nama,
            'description'=> $request->description,
            'image' =>$request->image,
        ]);
        return redirect()->back();
    }
    public function get_program(Request $request)
    {
        $program = DB::table('program')->get();
        return view('dashboard.program',compact('program'));
    }
    public function hapus_program($id)
    {
        $db = DB::table('program')->where('id',$id);
        $db->delete();
        return redirect()-back();
    }
    public function update_program(Request $request)
    {
        DB::table('program')->where('id',$request->id)->update([

            'nama'=> $request->nama,
            'description'=> $request->description,
            'image' =>$request->image,
        ]);
        return redirect()->back();
    }
}
