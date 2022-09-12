<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluation extends Model
{
    public $incrementing = true;
    protected $keyType = 'string';
    public $primaryKey = 'ev_id';
    public $timestamps = false;
    protected $table = 'evaluations';
}
