<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addinvest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'investment_plan',
        'investment_amount',
        'crypto_network',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
