<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentList(Request $req)
    {
        $pageNumber = $req->pageNumber;
        return $pageNumber;
    }
}
