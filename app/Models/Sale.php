<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'total',
        'customer_name',
    ];
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
