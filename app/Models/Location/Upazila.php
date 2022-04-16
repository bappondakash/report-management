<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $fillable = [
        'upazila_name',
        'division_id',
        'distric_id'
    ];
    public $timestamps = false;


    public function division()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function distric()
    {
        return $this->hasOne(Distric::class, 'id', 'distric_id');
    }
}
