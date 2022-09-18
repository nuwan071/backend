<?php

namespace App\Models\HumanResource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
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
        'start_time',
        'shift_length'
    ];

    /**
     * Get By Slug
     *
     * @param  String $slug
     * @return Shift
     */
    public function getBySlug($slug): ?Shift
    {
        return $this->where('slug', $slug)->first();
    }
}
