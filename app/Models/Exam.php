<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function examgroup()
    {
        return $this->hasMany(ExamGroup::class)->with(['groups', 'files','examcontent','question']);
    }



    public function exampartial()
    {
        return $this->hasMany(ExamPartial::class)->with(['chapter']);
    }

    public function examtype()
    {
        return $this->belongsTo(ExamType::class, "exam_type_id", "id");

    }

    public function school()
    {
        return $this->belongsTo(School::class, "school_id", "id");

    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, "lesson_id", "id");

    }

    public function  class()
    {
        return $this->belongsTo(Clas::class, "class_id", "id");
    }
    public function  branch()
    {
        return $this->belongsTo(Branch::class, "branch_id", "id");
    }

}
