<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    //
     use HasFactory, HasUuids, Sluggable;
    protected $table = 'travels';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'number_of_days',
        'is_public',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

     public function numberOfNights(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['number_of_days'] - 1
        );
    }

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    public function getRouteKeyName(): string
{
    return 'slug';
}
}
