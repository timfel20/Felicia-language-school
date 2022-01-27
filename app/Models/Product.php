<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'people',
        'date',
        'description',
        'user_id'
    ];


    public function isInLove($productsId)
    {
        if ($this->loves()->find($productsId)) return true;
        return false;
    }

}
