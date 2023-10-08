<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $stable = "video";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'video', 'header', 'subheader'
    ];
}
