<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DesaKelurahan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'desa_kelurahan';
}
