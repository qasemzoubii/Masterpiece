<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    
    public function user() //With User Model (M:1)
    {
        return $this->belongsTo(User::class);
    }
    
    public function orderItems() //With OrderItem Model (1:M)
    {
        return $this->hasMany(Orderitem::class);
    }
    
    public function discount() //With Discount Model (M:1)
    {
        return $this->belongsTo(Discount::class);
    }
    
    public function cart() //With Cart Model (1:1)
    {
        return $this->belongsTo(Cart::class);
    }

}
