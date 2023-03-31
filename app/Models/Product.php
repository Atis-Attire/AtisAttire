<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'modell',
        'size',
        'stock'
    ];

    public function modells(){
        return $this->belongsTo(Modell::class, 'modell', 'id');
    }
}
