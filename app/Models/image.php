<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class image extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $stable ="slider";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','logo','slide', 'fixed_gambar', 'banner'
    ];


}
