<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiKeluhan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_keluhan',
        'username',
        'jenis_kelamin',
        'usia',
        'berat_badan',
        'tinggi_badan',
        'gol_darah',
        'keluhan',
        'solusi',
        'id_user'
    ];

    function dokter(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function patient()
    {
        return $this->belongsTo(User::class);
    }
}
