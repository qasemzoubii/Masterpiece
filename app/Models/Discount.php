<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discount';
    protected $fillable = [
        'discount_code','percentage','expired_date'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
}
