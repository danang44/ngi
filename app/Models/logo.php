<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class logo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $stable ="logo";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama','logo'
    ];
}
