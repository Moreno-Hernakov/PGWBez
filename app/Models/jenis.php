<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];
    protected $table = 'jenis';

    public function kontak(){
        return $this->hasOne(kontak::class, 'jenis_id', 'id');
    }
}
