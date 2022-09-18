<?php

namespace App\Models\HumanResource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'address',
        'latitude',
        'longitude'
    ];

    /**
     * Get By Slug
     *
     * @param  String $slug
     * @return Location
     */
    public function getBySlug($slug): ?Location
    {
        return $this->where('slug', $slug)->first();
    }
}
