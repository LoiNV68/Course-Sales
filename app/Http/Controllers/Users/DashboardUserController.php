<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index () {
        $role = session('role');
        if ($role == 0) {
            return view('student.dashboard-student', ['title' => 'Dashboard']);
        } else if ($role == 1){
            return view('instructor.dashboard-instructor', ['title' => 'Dashboard']);
        }else {
            return view('admin.dashboard-admin', ['title' => 'Dashboard']);
        }
    }

    public function InstructorProfile () {
        return view('instructor.instructor-profile', ['title' => 'Profile']);
    }
}
