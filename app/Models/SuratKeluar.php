<?php

namespace App\Models;

use App\Models\kodePengarsipan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    public function scopeFilter($query, array $filters){

        /*
            $collection = collect([1, 2, 3]);

            $collection->when(true, function ($collection) {
                return $collection->push(4);
            });

            - ketika parameter pertama bernilai true, maka closure akan dijalankan dengan parameter
            yang sudah diset pada closure 

            - kurang lebih jadi kayak if

            - kebalikan dari when adalah unless()
        */

        // $search pada closure akan menangkap apapun yang ada pada $filters['search]
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('no_urut', 'like', '%' . $search . '%');
        });
    
    }

    public function kode_pengarsipan(){
        return $this->belongsTo(kodePengarsipan::class);
    }
}
