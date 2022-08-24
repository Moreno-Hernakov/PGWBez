<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;

    protected $guarded = ['$id'];
    protected $table = 'kontak';

    public function jenis(){
        return $this->belongsTo(jenis::class, 'jenis_id', 'id');
    }

    
    public function siswa(){
        return $this->belongsTo(siswa::class, 'siswa_id');
    }
}
