<?php

namespace App\Models;

use App\Models\courses\CourseModel;
use App\Models\courses\CourseReviewModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorModel extends Model
{
    use HasFactory;
    protected $table = 'instructor_info';
    public function user() {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }

    public function course() {
        return $this->hasMany(CourseModel::class, 'instructor_id', 'id');
    }

    public function courseReview() {
        return $this->hasMany(CourseReviewModel::class, 'instructor_id', 'id');
    }
}
