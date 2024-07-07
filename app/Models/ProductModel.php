<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 
        'product_description', 
        'product_price', 
        'product_image', 
        'product_link'
    ];

    public function getProductPriceAttribute($value)
    {
        // Konversi nilai dari string ke float, lalu format
        $price = floatval($value);
        return 'Rp. ' . number_format($price, 0, ',', '.');
    }
}

