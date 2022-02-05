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
    
    public function loves()
    {
        return $this->belongsToMany(User::class, 'loves')->withTimestamps();
    }

    public function isInLove($productsId)
    {
        if ($this->loves()->find($productsId)) return true;
        return false;
    }
    public function applyToProducts($userId){
        $user = User::find($userId);
        $this->loves()->attach($user);
        return true;
    }
    public function unapplyToProducts($userId){
        $user = User::find($userId);
        $this->loves()->detach($user);
        return true;
    }

}
