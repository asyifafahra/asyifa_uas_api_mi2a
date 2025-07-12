<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    protected $table = 'kliniks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'type',
        'latitude',
        'longitude',
    ];

}
