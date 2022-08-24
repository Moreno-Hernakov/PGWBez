<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];
    protected $table = 'project';

    public function siswa(){
        return $this->belongsTo(siswa::class, 'siswa_id', 'id');
    }
}
