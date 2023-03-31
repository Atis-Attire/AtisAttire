<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function modells(): HasMany
    {
        return $this->hasMany(Modell::class, 'category', 'id');
    }
}
