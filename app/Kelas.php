<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'kelas',
    ];

    public function jurusan()
    {
        return $this->belongsTo('App\Attendance');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Student');
    }

    public function siswaData()
    {
        return $this->hasMany('App\Student', 'kelas', 'id');
    }
}
