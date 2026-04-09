<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return "Thêm sinh viên thành công!";
    }
}
