<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id_user'; // Nama kolom primary key
    public $timestamps = false; // Jika Anda tidak memiliki kolom created_at dan updated_at
}
