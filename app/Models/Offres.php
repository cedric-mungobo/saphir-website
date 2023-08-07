<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offres extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    protected function createdAt(): Attribute
{
    return Attribute::make(
        get: fn ($value, $attributes) => Carbon::create($value)->format("m/d/Y")
    );
}


}
