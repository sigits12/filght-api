<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $table = 'ports';

    protected $primaryKey = 'port';

    protected $guarded = [];

    public $timestamps = false;
}
