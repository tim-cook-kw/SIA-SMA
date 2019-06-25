<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enums\UserType;

class StaffingController extends Controller
{
    public function index()
    {
        return view('admin.staff.index');
    }

    public function store(Request $request)
    {
        
        $data = $request->all();
        $data['password'] = 'test';
        $data['role_id'] = UserType::Staff;
        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $path = $uploadedFile->store('public/image');
            $data['image'] = $path;
        }
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
        $data = $request->all();
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($staff->image);
            $data['image'] = $request->file('image')->store('public/image');;
            $staff->update($data);
            return json_encode(['staff' => $staff]);
        }
        $staff->update($request->except('image'));
        return json_encode(['staff' => $staff]);
        // $student->update($request->all());
    }

    public function destroy(User $staff)
    {
        $staff->delete();
    }
}
