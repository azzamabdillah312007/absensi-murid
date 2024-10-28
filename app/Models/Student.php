<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    // Jika Nama model tidak sesuai dengan table di database , maka harus pakai seperti ini 
    protected $table = 'students';

    protected $fillable = [
        'nama',
        'nis',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'email',
        'jenis_kelamin',
        'classes_id',
        'orang_tua',
    ];

    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }
}
