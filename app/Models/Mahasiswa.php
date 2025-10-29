<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    //Kolom yang di isi
    protected $fillable = ['nama', 'nim', 'jurusan'];
}
