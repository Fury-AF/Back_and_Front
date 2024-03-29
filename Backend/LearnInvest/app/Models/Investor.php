<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Investor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    public function investments(): HasMany
    {
        return $this->hasMany(Investment::class);
    }
}
