<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentList(Request $req)
    {
        $pageNumber = $req->pageNumber;
        $users = Student::offset(($pageNumber-1)*20)->limit(20)->get();
        $count = Student::count();
        return response()->json(['students'=>$users, 'count'=>$count]);
    }
}
