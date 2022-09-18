<?php

namespace App\Models\HumanResource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];

    /**
     * Get By Email
     *
     * @param  String $email
     * @return Employee
     */
    public function getByEmail($email): ?Employee
    {
        return $this->where('email', $email)->first();
    }
}
