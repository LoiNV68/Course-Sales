<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\courses\CourseModel;
use App\Models\courses\CourseReviewModel;
use Carbon\Carbon;


class CourseController extends Controller
{
    public function index()
    {
        return view('courses.course', ['title' => 'Courses']);
    }

    public function detail($id)
    {
        // course information   
        $course = CourseModel::withAvg('review', 'rate')
            ->withCount('review')
            ->withCount('sale')
            ->find($id);

        // Course rating count
        $starCounts = CourseReviewModel::selectRaw('rate, COUNT(*) as count')
            ->where('course_id', $id)
            ->whereIn('rate', [1, 2, 3, 4, 5])
            ->groupBy('rate')
            ->get();

         // Review users and time after comments
         $reviews = CourseReviewModel::where('course_id', $id)
         ->orderBy('created_at', 'desc') // Sắp xếp từ mới nhất đến cũ nhất
         ->paginate(4); // Số bình luận trên mỗi trang

        // Review users and time after comments
        $reviewUsers = [];
        $timeAgo = [];
        foreach ($reviews as $review) {
            if ($review->student_id !== null) {
                $reviewUsers[] = $review->student;
            }
            if ($review->instructor_id !== null) {
                $reviewUsers[] = $review->instructor;
            }
        }
       
        View::share([
            'course' => $course,
            'starCounts' => $starCounts,
            'reviewUsers' => $reviewUsers,
            'reviews' => $reviews,
        ]);
        return view('courses.course', ['title' => 'Course Detail']);
    }

    public function lecture($id)
    {
        return view('courses.course-detail', ['title' => 'Course Lecture']);
    }
}
