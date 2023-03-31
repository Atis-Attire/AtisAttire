<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modell extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'designer',
        'describe',
        'picture',
        'season',
        'category',
        'price'
    ];

    public function products(){
        return $this->hasMany(Product::class, 'modell', 'id');
    }
    public function designer(){
        return $this->belongsTo(Designer::class, 'designer', 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
