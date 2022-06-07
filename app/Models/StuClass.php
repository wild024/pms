<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StuClass extends Model
{
    use HasFactory;

    public function subject (){
        return $this->hasMany(Subject::class,"class_id");
    }
}
