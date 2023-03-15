<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Pennant\Concerns\HasFeatures;

class Company extends Model
{
    use HasFactory, HasFeatures;

    protected $fillable = [
        'name',
        'is_premium'
    ];

    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }
}
