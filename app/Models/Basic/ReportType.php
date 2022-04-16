<?php

namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportType extends Model
{
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
    use HasFactory;
}
