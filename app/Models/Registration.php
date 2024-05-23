<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

//table Name
protected $table = "registrations";

//primary key
protected $primaryKey = "id"; 

//fillable 
protected $fillable = array(
    'student_name', 
    'phone_number', 
    'email',
     'gender',
      'course_id',
       'fees',
        'duration'
);

public function course(){
    return $this->belongsTo(Course::class);
}
}
