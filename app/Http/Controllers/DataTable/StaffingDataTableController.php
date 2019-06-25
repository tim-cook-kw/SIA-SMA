<?php

namespace App\Http\Controllers\DataTable;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StaffingDataTableController extends Controller
{
    public function index()
    {
        $user = User::teacher();
        $data = [];
        foreach ($user as $index => $list) {
            $row = [];
            $row[] = ++$index;
            $row[] = $list->nip;
            $row[] = $list->name;
            $row[] = $list->email;
            $row[] = $list->birth_date;
            $row[] = $list->address;
            $row[] = $list->phone;
            $row[] = $list->gender;
            $row[] = $list->religion;
            $row[] = $list->position;
            $row[] = '<div class="text-center"><img style="height:50px; width:50px" src="' . Storage::url($list->image) . '"></div>';
            // $row[] = '<div class="text-center"><img style="height:50px; width:50px" src="' . Storage::url('image/' . $list->image) . '"></div>';
            $row[] = '<div class="text-center"><div class="btn-group">
               <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
               <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
            $data[] = $row;
        }

        $output = ['data' => $data];
        return response()->json($output);
    }
}
