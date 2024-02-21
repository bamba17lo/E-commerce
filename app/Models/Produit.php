<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo();
    }



}
