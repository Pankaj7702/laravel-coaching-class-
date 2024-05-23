<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    //table Name
    protected $table = "courses";

    //primary key
    protected $primaryKey = "id"; 

    //fillable 
    protected $fillable = array(
        'name', 
        'fees', 
        'duration'
    );
    public function registrations(){
        return $this->hasmany(Registration::class);
    }
}
