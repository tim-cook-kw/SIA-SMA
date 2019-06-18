<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffingController extends Controller
{
    public function index()
    {
        return view('admin.staff.index');
    }

    public function store(Request $request)
    {
        $uploadedFile = $request->file('image');
        $path = $uploadedFile->store('public/image');
        $data = $request->all();
        $data['password'] = 'test';
        $data['image'] = $path;
        // $request->merge([
        //     'password' => 'test',
        //     'image' => $path,
        // ]);
        User::create($data);
        // $user = User::create($request->all());
    }

    public function edit(User $staff)
    {
        echo json_encode($staff);
    }

    public function update(Request $request, User $staff)
    {
        $staff->update($request->all());
    }

    public function destroy(User $staff)
    {
        $staff->delete();
    }
}
