<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'crs_id';
    public $timestamps = false;
    protected $table = 'courses';
}
