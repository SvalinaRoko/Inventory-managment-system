<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'category_id',
        'supplier_id',
        'user_id'
    ];

    function product(){
        return $this->belongsTo(Category::class);
        return $this->belongsTo(Supplier::class);
        return $this->belongsTo(User::class);
    }
}
