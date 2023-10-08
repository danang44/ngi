<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artikel extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $stable = "artikel";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'judul', 'gambar', 'author', 'tanggal', 'deskripsi', 'artikellengkap'
    ];
}
