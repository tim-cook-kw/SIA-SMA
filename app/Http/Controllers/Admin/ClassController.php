<?php

namespace App\Http\Controllers\Admin;

use App\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    public function index()
    {
        return view('admin.class.index');
    }

    public function store(Request $request)
    {
        $kelas = Kelas::create([
            'code_class'=> $request->code_class,
            'class_name'=> $request->class_name,
            'nama_guru'=> $request->nama_guru,
            'tahun_ajaran'=> $request->tahun_ajaran,
        ]);
    }

    public function edit(Kelas $class)
    {
        echo json_encode($class);
    }

    public function update(Request $request, Kelas $class)
    {
        $class->update($request->all());
    }

    public function destroy(Kelas $class)
    {
        $class->delete();
    }
}
