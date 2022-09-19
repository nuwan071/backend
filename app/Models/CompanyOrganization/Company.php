<?php

namespace App\Models\CompanyOrganization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'introduction',
        'description',
        'location_id',
        'asset_id',
        'company_group_id'
    ];
}
