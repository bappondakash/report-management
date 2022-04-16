<?php

namespace App\Models\Basic;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'column_one',
        'column_two',
        'column_three',
        'column_four',
        'column_five',
        'column_six',
        'column_seven',
        'column_eight',
        'column_nine',
        'column_tem',
        'column_eleven',
        'column_twelve',
        'column_thirteen',
        'column_fourteen',
        'column_fifteen',
        'column_sixteen',
        'column_seventeen',
        'fiscal_year',
        'month',
        'report_type',
        'status',
        'desk',
        'user_id',
    ];

    public function createduser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
