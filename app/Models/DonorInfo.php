<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_of_birth', 'gender', 'address','contact_no','donor_id',
    ];

    public function donor()
    {
        return $this->hasOne(Donor::class);
    }
}
