<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillable = [
        'investor_id',
        'investment_name',
        'amount',
    ];
   
    public function investment()
    {
        return $this->belongsTo(Investor::class);
    }
}
