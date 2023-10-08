<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class header extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $stable = "header";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'judul', 'subjudul', 'section',
    ];
}
