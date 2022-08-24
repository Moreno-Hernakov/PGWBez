<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nisn',
    //     'nama',
    //     'alamat',
    //     'jk',
    //     'foto',
    //     'about'
    // ];

    protected $guarded = ['$id'];
    protected $table = 'siswa';

    public function kontak(){
        return $this->hasMany(kontak::class, 'siswa_id', 'id');
    }

    public function project(){
        return $this->hasMany(project::class, 'siswa_id', 'id');
    }
}
