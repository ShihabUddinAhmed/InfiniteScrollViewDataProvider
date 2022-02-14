<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentList(Request $req)
    {
        $pageNumber = $req->pageNumber;
        $users = Student::all()->skip(($pageNumber-1)*20)->take(20);
        return $users;
    }
}
