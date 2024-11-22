<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\UserModel;
use App\Models\courses\CourseCategoryModel;
use App\Models\courses\CourseModel;
use Illuminate\Support\Facades\DB;


class HomeController
{
    public function index()
    {
        $title = 'Home';

        // User profile
        $user = Auth::user();
        $userDetail = null; // Khởi tạo biến $userDetail để tránh lỗi không xác định
        if ($user) {
            $user = UserModel::find($user->id);

            $userDetail = null; // Khởi tạo biến $userDetail để tránh lỗi không xác định

            if ($user) {
                if ($user->role === 0) {
                    // Lấy chi tiết sinh viên và các cột cụ thể
                    $userDetail = $user->student()->first();
                } elseif ($user->role === 1) {
                    // Lấy chi tiết giảng viên và các cột cụ thể
                    $userDetail = $user->instructor()->first();
                }

                // Kiểm tra nếu userDetail không tồn tại hoặc avatar chưa được cập nhật
                if (!$userDetail || !$userDetail->avatar) {
                    $defaultAvatar = 'avatar-00.jpg'; // Đường dẫn tới ảnh đại diện mặc định

                    // Thiết lập avatar mặc định nếu chưa có
                    $userDetail = (object)[
                        'avatar' => $defaultAvatar,
                        'firstname' => $userDetail->firstname ?? 'Default Firstname',
                        'lastname' => $userDetail->lastname ?? 'Default Lastname',
                        'phone' => $userDetail->phone ?? 'Default Phone',
                        'birthday' => $userDetail->birthday ?? 'Default birthday',
                        'address' => $userDetail->address ?? 'Default Address',
                    ];
                }
            }
        }
   

        // Course Categories
        $courseCate = CourseCategoryModel::take(5)->get();

        // Courses Recommend
        $rcmCourses = CourseModel::withAvg('review', 'rate')
            ->withCount('review')
            ->withCount('sale')
            ->orderBy('price')
            ->take(10)
            ->get();


     
        // Query to get top 10 courses by sale count

        $topCourses = CourseModel::select('course.id', 'course.name', 'course.title', 'course.level', 'course.image', 'course.price', 'course.instructor_id', DB::raw('COUNT(course_sale.student_id) as total_sales'))
            ->join('course_sale', 'course.id', '=', 'course_sale.course_id')
            ->groupBy('course.id', 'course.name', 'course.title', 'course.level', 'course.image', 'course.price', 'course.instructor_id') // Đảm bảo các cột này được thêm vào GROUP BY
            ->orderByDesc('total_sales')
            ->withAvg('review', 'rate')
            ->withCount('review')
            ->withCount('sale')
            ->take(10)
            ->get();

        // Courses Advance
        $advanceCourses = CourseModel::take(10)->where('level', '=', 'Advance')
            ->withAvg('review', 'rate')
            ->withCount('review')
            ->withCount('sale')
            ->get();



    
    

        View::share([
            'user' => $user,
            'userDetail' => $userDetail,
            'courseCate' => $courseCate,
            'rcmCourses' => $rcmCourses,
            'topCourses' => $topCourses,
            'advanceCourses' => $advanceCourses,
        ]);

        // dd($userDetail); 
        return view('home', compact('title'));
    }
}
