<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class layanan extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $stable ="layanan";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','judul','layanan','deskripsi'
    ];
}
