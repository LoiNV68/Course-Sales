<?php

namespace App\Models\courses;

use App\Models\InstructorModel;
use App\Models\StudentModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;
    protected $table = 'course';

    public function Category() {
        return $this->belongsTo(CourseCategoryModel::class, 'course_cate_id', 'id');
    }
    public function user() {
        return $this->belongsTo(UserModel::class, 'course_id', 'id');
    }

    public function instructor() {
        return $this->belongsTo(InstructorModel::class, 'instructor_id', 'id');
    }

    public function student() {
        return $this->belongsTo(StudentModel::class, 'course_id', 'id');
    }
    public function review() {
        return $this->hasMany(CourseReviewModel::class, 'course_id', 'id');
    }

    public function section() {
        return $this->hasMany(CourseSectionModel::class, 'course_id', 'id');
    }

    public function sale() {
        return $this->hasMany(CourseSaleModel::class, 'course_id', 'id');
    }
    
}
