<?php

namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiscalYear extends Model
{
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
    use HasFactory;
}
