<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index()
    {
        $teacher = User::teacher();
        return view('admin.subject.index', compact('teacher'));
    }

    public function store(Request $request)
    {
        $request->merge(['code' => uniqid()]);
        Subject::create($request->all());
    }

    public function edit(Subject $subject)
    {
        echo json_encode($subject);
    }

    public function update(Request $request, Subject $subject)
    {
        $subject->update($request->all());
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
    }
}
