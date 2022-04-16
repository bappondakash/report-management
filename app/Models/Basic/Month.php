<?php

namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
    use HasFactory;
}
