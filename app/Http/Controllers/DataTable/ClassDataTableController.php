<?php

namespace App\Http\Controllers\DataTable;

use App\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassDataTableController extends Controller
{
    public function index()
    {
        $class = Kelas::all();
        $data = [];
        foreach ($class as $index => $list) {
            $row = [];
            $row[] = ++$index;
            $row[] = $list->code_class;
            $row[] = $list->class_name;
            $row[] = $list->nama_guru;
            $row[] = $list->tahun_ajaran;
            $row[] = '<div class="text-center"><div class="btn-group">
               <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
               <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
            $data[] = $row;
        }

        $output = ['data' => $data];
        return response()->json($output);
    }
}
