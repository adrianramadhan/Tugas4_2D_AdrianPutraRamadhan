<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'kodemk';
    public $incrementing = false;
    public $timestamps = false;
}