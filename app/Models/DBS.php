<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DBS extends Model
{
    protected $table = "siswa";
    protected $guarded = [];
    protected $dates = ['create_at'];
}