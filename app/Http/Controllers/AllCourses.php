<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllCourses extends Controller
{
    public function courses() {
        return view('all-courses');
    }
}
