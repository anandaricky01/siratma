<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodePengarsipan extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    
    public function suratMasuk(){
        return $this->hasMany(App\Model\SuratMasuk::class);
    }

    public function suratKeluar(){
        return $this->hasMany(App\Model\suratKeluar::class);
    }
    
}
