<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'foto_siswa',
        'nama',
        'kelas',
        'nisn',
        'ttl',
        'anak_ke',
        'agama',
        'alamat',
        'no_hp_siswa',
        'no_hp_ayah',
        'nama_ayah',
        'pekerjaan_ayah',
        'no_hp_ibu',
        'nama_ibu',
        'pekerjaan_ibu',
        'nam_wali',
        'pekerjaan_wali',
        'alamat_wali'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Attendance');
    }

    public function kelas()
    {
        return $this->hasMany('App\Kelas', 'id', 'kelas');
    }

    public function kelasData()
    {
        return $this->belongsTo('App\Kelas');
    }
}
