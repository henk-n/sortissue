<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends Model
{
    protected $table = 'agencies';
    use HasFactory;
    protected $fillable = [
        'Code',
        'Status',
        'Aanvrager',


    ];


    public function clothing(): HasMany
    {
        return $this->hasMany(Clothing::class);
    }

   
}