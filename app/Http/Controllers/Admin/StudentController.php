<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enums\UserType;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.student.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = 'test';
        $data['role_id'] = UserType::Student;
        if ($request->hasFile('image')) {
        $uploadedFile = $request->file('image');
        $path = $uploadedFile->store('public/image');
        $data['image'] = $path;
        }
        User::create($data);
    }

    public function edit(User $student)
    {
        echo json_encode($student);
    }

    public function update(Request $request, User $student)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($student->image);
            $data['image'] = $request->file('image')->store('public/image');;
            $student->update($data);
            return json_encode(['student' => $student]);
        }
        $student->update($request->except('image'));
        return json_encode(['student' => $student]);
        // $student->update($request->all());
    }

    public function destroy(User $student)
    {
        $student->delete();
    }
}
