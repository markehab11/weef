<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'image',
        'pro_code',
        'categorie_id',
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

}
