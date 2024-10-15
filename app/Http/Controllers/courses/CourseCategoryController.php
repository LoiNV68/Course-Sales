<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index () {
        return view('courses.course-filter-list', ['title' => 'Course Categories']);
    }
}
