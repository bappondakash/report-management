<?php

namespace App\Models\Office;

use App\Models\Location\Distric;
use App\Models\Location\Division;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistricOffice extends Model
{
    protected $fillable = [
        'office_name',
        'office_email',
        'office_mobile',
        'office_website',
        'division_id',
        'distric_id'
    ];
    public $timestamps = false;

    public function division(){
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function distric(){
        return $this->hasOne(Distric::class, 'id', 'distric_id');
    }
}
