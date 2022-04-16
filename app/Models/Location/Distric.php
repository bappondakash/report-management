<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distric extends Model
{
    protected $fillable = [
        'distric_name',
        'division_id'
    ];
    public  $timestamps = false;

    public function division()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }
}
