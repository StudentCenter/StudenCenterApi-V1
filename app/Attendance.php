<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';

    public function kehadiran()
    {
        return $this->hasMany('App\Kelas', 'id', 'kelas');
    }

    public function siswa()
    {
        return $this->hasMany('App\Student', 'id', 'nama_siswa');
    }
}
