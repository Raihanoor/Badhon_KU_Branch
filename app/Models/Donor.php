<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id', 'user_id', 'height','weight','next_available_date','is_available',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function donor_info()
    {
        return $this->hasOne(Donor_info::class);
    }

    public function donation()
    {
        return $this->hasMany(Donation::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
