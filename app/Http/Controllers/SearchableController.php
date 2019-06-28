<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchableController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('users')->select('id', 'email')->where('email', 'LIKE', '%$cari%')->get();
            return response()->json($data);
        }
    }
}
