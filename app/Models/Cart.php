<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $fillable = ['quantity', 'user_id', 'product_id'];


    
    public function user() //With User Model (M:1)
    {
        return $this->belongsTo(User::class);
    }
    
    public function product() //With Product Model (M:1)
    {
        return $this->belongsTo(Product::class);
    }

    // public function order()
    // {
    //     return $this->hasOne(Order::class);
    // }
}
