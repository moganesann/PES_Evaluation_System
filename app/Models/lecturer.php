<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'lect_id';
    public $timestamps = false;
    protected $table = 'lecturers';
}
