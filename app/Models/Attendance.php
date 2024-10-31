<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $fillable = [
        'tanggal',
        'class_id',
    ];

    public function classes(){
        return $this->belongsTo(Classroom::class , 'class_id');
    }
    
}
