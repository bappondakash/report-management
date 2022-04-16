<?php

namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'designation_name',
        'role_level',
    ];

    use HasFactory;
}
