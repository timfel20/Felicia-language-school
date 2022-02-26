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
        'user_id',
    ];
     //this is use for example if user wants to create various events. In this situation we won't
     //need it beacuse we are making like a shopping cart kinda thing. i.e users can substibe to 
     //products or add products to their personal page or cart. We'll need to create another eloquent
     //relation which is (many)users belongsToMany products. Dont forget to write the table we've created
     //just for their realtion in our case it's loves .
     
   /*  public function loves()
    {
        return $this->belongsToMany(User::class, 'loves')->withTimestamps();
    } */
    
    public function loves()
    {
        return $this->belongsToMany(User::class, 'MyList')->withTimestamps();
    }

    public function isInLove($userid)
    {
       $user=User::find($userid);
       $this->loves()->attach($user);
       return true;
    }
    /* public function applyToProducts($userId){
        $user = User::find($userId);
        $this->loves()->attach($user);
        return true;
    }
    public function unapplyToProducts($userId){
        $user = User::find($userId);
        $this->loves()->detach($user);
        return true;
    } */

}
