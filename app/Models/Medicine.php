<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $table = 'medicines';
    protected $fillable = [
        'medicine_name',
        'generic_name',
        'brand_name',
        'drug_name',
        'price',
        'manufacturer',
        'dosage',
        'quantity_stock',
        'manufacture_date',
        'expiration_date',
        'image',
    ];
}
