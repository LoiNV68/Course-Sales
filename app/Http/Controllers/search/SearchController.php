<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courses\CourseModel;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchLive(Request $request)
    {
        try {
            $query = $request->input('query');
            $instructorId = $request->input('instructor_id');

            $courses = CourseModel::select(
                'course.id',
                'course.title',
                'course.level',
                'course.image',
                DB::raw('count(course_sale.student_id) as total_students')
            )
                ->where(function ($q) use ($query) {
                    $q->where('course.id', 'like', '%' . $query . '%')
                        ->orWhere('course.title', 'like', '%' . $query . '%')
                        ->orWhere('course.level', 'like', '%' . $query . '%');
                        // ->orWhere('course.preview', 'like', '%' . $query . '%');
                })
                ->join('course_sale', 'course_sale.course_id', '=', 'course.id')
                ->groupBy('course.id', 'course.title', 'course.level', 'course.image')
                ->where('course.instructor_id', '=', $instructorId)
                ->withAvg('review', 'rate')
                ->withCount('review')
                ->withCount('sale')
                ->take(4)
                ->get();

            

            return response()->json($courses, 200);
        } catch (\Exception $e) {
            // Return an error response if an exception occurs
            return response()->json(['error' => 'Error search course: ' . $e->getMessage()], 500);
        }
    }

}
