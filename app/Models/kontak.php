<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kontak extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $stable ="kontak";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','judul','icon','deskripsi','link','url'
    ];
}
