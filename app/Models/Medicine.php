<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'supplier_id',
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

    // Relationships
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    protected $appends = ['time_until_expiration'];

    public function getTimeUntilExpirationAttribute()
    {
        $expiryDate = Carbon::parse($this->expiration_date);
        $now = Carbon::now();

        if ($now->greaterThanOrEqualTo($expiryDate)) {
            return [
                'message' => 'EXPIRED',
                'class' => 'text-danger'
            ];
        }

        $diffInMonths = $now->diffInMonths($expiryDate);
        $diff = $now->diff($expiryDate);

        if ($diffInMonths <= 3) {
            return [
                'message' => 'Warning ' . $diff->format('%m month(s) and %d days'),
                'class' => 'text-warning'
            ];
        }

        return [
            'message' => "{$diffInMonths} months",
            'class' => 'text-primary'
        ];
    }
}
