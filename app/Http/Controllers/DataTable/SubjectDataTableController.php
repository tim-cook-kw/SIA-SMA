<?php

namespace App\Http\Controllers\DataTable;

use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SubjectDataTableController extends Controller
{
    public function index()
    {
        $user = Subject::all();
        $data = [];
        foreach ($user as $index => $list) {
            $row = [];
            $row[] = ++$index;
            $row[] = $list->code;
            $row[] = $list->name;
            $row[] = $list->user->name;
            $row[] = '<div class="text-center"><div class="btn-group">
               <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
               <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
            $data[] = $row;
        }

        $output = ['data' => $data];
        return response()->json($output);
    }
}
