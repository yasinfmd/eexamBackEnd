<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = "classes";
    public function school()
    {
        return $this->belongsToMany(School::class, "school_class_branch_pivots", "class_id", "school_id");
    }
}
