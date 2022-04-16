<?php

namespace App\Models;

use App\Models\Basic\Designation;
use App\Models\Location\Distric;
use App\Models\Location\Division;
use App\Models\Location\Upazila;
use App\Models\Office\DistricOffice;
use App\Models\Office\DivisionalOffice;
use App\Models\Office\UpazilaOffice;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    public function division()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function distric()
    {
        return $this->hasOne(Distric::class, 'id', 'distric_id');
    }

    public function upazila()
    {
        return $this->hasOne(Upazila::class, 'id', 'upazila_id');
    }

    public function designation()
    {
        return $this->hasOne(Designation::class, 'role_level', 'user_level');
    }

    public function divisionaloffice()
    {
        return $this->hasOne(DivisionalOffice::class, 'office_code', 'office_id');
    }

    public function districoffice()
    {
        return $this->hasOne(DistricOffice::class, 'office_code', 'office_id');
    }

    public function upazilaoffice()
    {
        return $this->hasOne(UpazilaOffice::class, 'office_code', 'office_id');
    }

}
