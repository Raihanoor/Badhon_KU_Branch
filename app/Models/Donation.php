<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'donor_id', 'donation_date','donation_place',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
