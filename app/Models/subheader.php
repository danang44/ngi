<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subheader extends Model
{
    use HasFactory;
    protected $stable ="subheader";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','judul','subjudul'
    ];

}
