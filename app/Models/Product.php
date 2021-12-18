<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // hubungkan tabel produks dengan tabel kategoris
    public function kategori() {
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
}
