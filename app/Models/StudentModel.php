<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\courses\CourseModel;
use App\Models\courses\CourseReviewModel;
class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'student_info';
    public function user() {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }

    public function course() {
        return $this->hasMany(CourseModel::class, 'course_id', 'id');
    }

    public function courseReview() {
        return $this->hasMany(CourseReviewModel::class, 'student_id', 'id');
    }
}
