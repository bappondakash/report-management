<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'division_name'
    ];
    public $timestamps = false;

    use HasFactory;
}
