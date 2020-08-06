<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramKursus extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'masa_studi', 'harga', 'kuota'];


    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran', 'id_program_kursus');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            Pendaftaran::class,
            'id_user',
            'id_pendaftaran'
        );
    }
}
