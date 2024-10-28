<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    // Jika Nama model tidak sesuai dengan table di database , maka harus pakai seperti ini 
    protected $table = 'classes';

    protected $fillable = [
        'nama_kelas',
        'tingkatan',
        'mapel',
        'teacher_id',
        'deskripsi',
        'kode_kelas',
        'ruangan',
    ];

    public function teachers(){
        return $this->belongsTo(User::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
