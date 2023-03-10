<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'users_data';
    protected $fillable = [
        'name',
        'birthdate',
        'sex',
        'address',
        'states',
        'cities',
    ];
    use HasFactory;
}
