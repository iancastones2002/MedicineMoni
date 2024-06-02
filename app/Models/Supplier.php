<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'contact_person',
    ];
}
